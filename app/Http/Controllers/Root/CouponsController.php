<?php

namespace App\Http\Controllers\Root;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Categories;
use App\Models\Coupons;
use App\Models\CouponTag;
use App\Models\Stores;
use App\Models\Tags;
use Notifications;
use Pinger;
use Redirect;
use View;
use Title;

class CouponsController extends Controller
{
    public function __construct()
    {
        Title::prepend('Admin');
    }

    public function index($store_id="")
    {
        if(isset($store_id) && !empty($store_id))
            $coupons = Coupons::with('category')->where('id',$store_id);
        else
            $coupons = Coupons::with('category');

        if (request()->has('status')) {
            $coupons->byStatus(request('status'));
        } else {
            $coupons->whereNotIn('status', ['deleted', 'refused']);
        }

        Title::prepend('Coupons');

        $q = request()->get('q', null);

        if (!empty($q)) {
            Title::prepend('Search: ' . $q);
            $coupons->search($q);
        }

        $data = [
            'coupons' => $coupons->orderBy('id','desc')->paginate(20),
            'url_params' => request()->except(['q']),
            'q' => $q,
            'status' => request('status', 'all'),
            'title' => Title::renderr(' : ', true),
            'categories' => Categories::all(),
        ];

        view()->share('menu_item_active', 'coupons');

        return view('root.coupons.index', $data);
    }

    public function newCoupon()
    {
        Title::prepend('New Coupon');

        $data = [
            'categories' => Categories::all(),
            'stores' => Stores::all(),
            'title'      => Title::renderr(' : ', true),
            'coupon'       => null,
            'save_url'   => route('root-coupons-store'),
            'tags'       => Tags::all(),
        ];

        view()->share('menu_item_active', 'coupons');

        return view('root.coupons.coupon', $data);
    }

    public function store(Requests\StoreCouponRequest $request, $coupon_id = null)
    {
        $coupon = Coupons::findOrNew($coupon_id);

        if (empty($coupon)) {
            redirect()->back()->withInput();
        }

        $seo_title = ($request->get('seo_title', '') != '') ? $request->get('seo_title') : $request->get('title');

        if ($request->hasFile('img')) {
            $filename = $this->_uploadMiniature($request->file('img'));
            $coupon->img = $filename;
        }

        $coupon->user_id = auth()->user()->id;
        $coupon->category_id = $request->get('category_id');
        $coupon->store_id = $request->get('store_id');
        $coupon->title = $request->get('title');
        $coupon->excerpt = $request->get('excerpt');
        $coupon->coupon_type = $request->get('coupon_type');
        $coupon->code = $request->get('code');
        $coupon->url = $request->get('url');
        $coupon->sort_by = $request->get('sort_by');
        $coupon->seo_title = strip_tags($seo_title);
        $coupon->seo_description = strip_tags($request->get('seo_description'));
        $coupon->seo_keywords = mb_strtolower(strip_tags($request->get('seo_keywords')));
        $coupon->status = $request->get('status');
        $coupon->is_pinned = $request->has('is_pinned');
        $coupon->published_at = $request->get('published_at');
        $coupon->expiry_date = $request->get('expiry_date');
        if ($request->has('update_slug')) {
            $coupon->resluggify();
        }
        $coupon->save();

        $this->_setTags($request->get('tags'), $coupon->id);

        if ($request->has('ping')) {
            Pinger::pingAll($coupon->title, route('view', ['slug' => $coupon->slug]));
        }

        Notifications::add('Coupon saved', 'success');

        //return Redirect::route('root-coupon-edit', ['coupon_id' => $coupon->id]);
        return Redirect::route('root-coupons');
    }

    public function edit($coupon_id)
    {
        $coupon = Coupons::with('tags')->find($coupon_id);
        Title::prepend('Edit Coupon');
        Title::prepend($coupon->id);

        $data = [
            'categories' => Categories::all(),
            'stores' => Stores::all(),
            'coupon'       => $coupon,
            'title'      => Title::renderr(' : ', true),
            'save_url'   => route('root-coupons-store', ['coupon_id' => $coupon_id]),
            'tags'       => Tags::all(),
        ];

        View::share('menu_item_active', 'coupons');

        return view('root.coupons.coupon', $data);
    }

    public function pin($coupon_id)
    {
        $this->_setPinnedStatus($coupon_id, true);
        Notifications::add('Coupon pinned', 'success');

        return Redirect::back();
    }

    public function unpin($coupon_id)
    {
        $this->_setPinnedStatus($coupon_id, false);
        Notifications::add('Coupon unpinned', 'success');

        return Redirect::back();
    }

    public function toDraft($coupon_id)
    {
        $this->_setCouponStatus($coupon_id, 'draft');
        Notifications::add('Coupon sent to drafts', 'success');

        return Redirect::back();
    }

    public function toActive($coupon_id)
    {
        $this->_setCouponStatus($coupon_id, 'active');
        Notifications::add('Coupon published', 'success');

        return Redirect::back();
    }

    public function toDeleted($coupon_id)
    {
        $this->_setCouponStatus($coupon_id, 'deleted');
        Notifications::add('Coupon deleted', 'success');

        return Redirect::back();
    }

    public function toCategory($coupon_id, $category_id)
    {
        $category = Categories::find($category_id);

        if (empty($category)) {
            Notifications::add('Category doesn\'t exist', 'danger');

            return Redirect::back();
        }

        $coupon = Coupons::find($coupon_id);
        $coupon->category_id = $category_id;
        $coupon->save();

        Notifications::add('Coupon "'.str_limit($coupon->title, '35', '...').'" moved to category "'.e($category->title).'"', 'info');

        return Redirect::back();
    }

    private function _setPinnedStatus($coupon_id, $status)
    {
        $coupon = Coupons::find($coupon_id);
        $coupon->is_pinned = $status;
        $coupon->save();

        return $coupon;
    }

    private function _setCouponStatus($coupon_id, $status)
    {
        $coupon = Coupons::find($coupon_id);
        $coupon->status = $status;
        $coupon->save();

        return $coupon;
    }

    private function _setTags($tags_str, $coupon_id)
    {
        CouponTag::where('coupon_id', $coupon_id)->delete();

        $tags = explode(', ', $tags_str);

        foreach ($tags as $tag) {
            if (trim($tag) == '') {
                continue;
            }
            $tag = mb_strtolower($tag);
            $dbtag = Tags::where('tag', 'like', $tag)->first();
            if (empty($dbtag)) {
                $dbtag = new Tags();
                $dbtag->tag = strip_tags($tag);
                $dbtag->save();
            }
            $coupon_tag = new CouponTag();

            $coupon_tag->coupon_id = $coupon_id;
            $coupon_tag->tag_id = $dbtag->id;
            $coupon_tag->save();
        }
    }

    private function _uploadMiniature($file)
    {
        $path = public_path('upload');
        $filename = generate_filename($path, $file->getClientOriginalExtension());
        $file->move($path, $filename);

        return $filename;
    }
}

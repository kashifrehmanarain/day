<?php

namespace App\Http\Controllers\Root;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Stores;
use App\Models\Coupons;
use Intervention\Image\Facades\Image;
use Notifications;
use Title;

class StoresController extends Controller
{
    public function __construct()
    {
        Title::prepend('Admin');
    }

    public function index()
    {
        Title::prepend('Stores');
        $q = request()->get('q', null);
        $stores = Stores::i();

        if (!empty($q)) {
            Title::prepend('Search: ' . $q);
            $stores = $stores->where('title', 'LIKE', '%' . $q . '%');
        }

        $data = [
            'title'      => Title::renderr(' : ', true),
            'stores' => $stores->sort()->paginate(20),
            //'url_params' => request()->except(['q']),
            'url_params' => [],
            'q' => $q,
        ];

        view()->share('menu_item_active', 'stores');

        return view('root.stores.index', $data);
    }

    public function newStore()
    {
        Title::prepend('New Store');

        $data = [
            'title'    => Title::renderr(' : ', true),
            'store' => null,
            'save_url' => route('root-stores-store'),
        ];

        return view('root.stores.store', $data);
    }

    public function editStore($store_id)
    {
        $store = Stores::find($store_id);

        Title::prepend('Edit Store');
        Title::prepend($store->title);

        $data = [
            'title'    => Title::renderr(' : ', true),
            'store' => $store,
            'save_url' => route('root-stores-store', ['store_id' => $store->id]),
        ];

        return view('root.stores.store', $data);
    }

    public function store(Requests\StoreStoreRequest $request, $store_id = null)
    {
        $store = Stores::findOrNew($store_id);

        if ($request->hasFile('store_logo')) {
            $filename = $this->_uploadMiniature($request->file('store_logo'));
            $store->store_logo = $filename;
        }

        $store->title = strip_tags($request->get('title'));
        $store->description = $request->get('description');
        $store->store_url = $request->get('store_url');
        $store->is_pinned = $request->has('is_pinned');
        $seo_title = strip_tags($request->get('seo_title'));
        $store->seo_title = (trim($seo_title) == '') ? $store->title : $seo_title;
        $store->seo_description = strip_tags($request->get('seo_description'));
        $store->seo_keywords = strip_tags($request->get('seo_keywords'));
        $store->facebook_url = $request->get('facebook_url');
        $store->twitter_url = $request->get('twitter_url');
        $store->google_url = $request->get('google_url');
        $store->instagram_url = $request->get('instagram_url');
        $store->pinterest_url = $request->get('pinterest_url');

        if ($request->has('update_slug')) {
            $store->resluggify();
        }
        $store->save();

        Notifications::add('Store saved', 'success');

        //return redirect()->route('root-stores-edit', ['store_id' => $store->id]);
        return redirect()->route('root-stores');
    }

    public function remove($store_id)
    {
        $store = Stores::find($store_id);
        $store->delete();
        if (request()->get('with_coupons', '0') == '1') {
            Coupons::where('store_id', $store_id)->delete();
            Notifications::success('Store removed with coupons');
        } else {
            Coupons::where('store_id', $store_id)->update(['store_id' => '1']);
            Notifications::success('Store removed. Coupons moved to Uncategorized');
        }

        return redirect()->route('root-stores');
    }

    private function _uploadMiniature($file)
    {
        $path = public_path('upload');
        $thumb_path = public_path('upload/thumb');
        $filename = generate_filename($path, $file->getClientOriginalExtension());
//        $thumbfilename = generate_filename($thumb_path, $file->getClientOriginalExtension());
        $file->move($path, $filename);

        $img = Image::make(sprintf($path.'/%s', $filename));

        $img->resize(600, 400);
        $img->save(sprintf($thumb_path.'/600/%s', $filename));

        $img->resize(300, 200);
        $img->save(sprintf($thumb_path.'/300/%s', $filename));

        $img->resize(150, 100);
        $img->save(sprintf($thumb_path.'/150/%s', $filename));

        $img->resize(222, 148);
        $img->save(sprintf($thumb_path.'/222/%s', $filename));

        return $filename;
    }

}

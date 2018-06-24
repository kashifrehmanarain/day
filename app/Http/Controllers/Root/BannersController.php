<?php

namespace App\Http\Controllers\Root;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Categories;
use App\Models\Banners;
//use App\Models\BannerTag;
use App\Models\Stores;
use App\Models\Tags;
use Intervention\Image\Facades\Image;
use Notifications;
use Pinger;
use Redirect;
use View;
use Title;

class BannersController extends Controller
{
    public function __construct()
    {
        Title::prepend('Admin');
    }

    public function index()
    {
        $banners = Banners::with('category');
        if (request()->has('status')) {
            $banners->byStatus(request('status'));
        } else {
            $banners->whereNotIn('status', ['deleted', 'refused']);
        }

        Title::prepend('Banners');

        $q = request()->get('q', null);

        if (!empty($q)) {
            Title::prepend('Search: ' . $q);
            $banners->search($q);
        }

        $data = [
            'banners' => $banners->sort()->paginate(20),
            'url_params' => request()->except(['q']),
            'q' => $q,
            'status' => request('status', 'all'),
            'title' => Title::renderr(' : ', true),
            'categories' => Categories::all(),
        ];

        view()->share('menu_item_active', 'banners');

        return view('root.banners.index', $data);
    }

    public function newBanner()
    {
        Title::prepend('New Banner');

        $data = [
            'categories' => Categories::all(),
            'stores' => Stores::all(),
            'tags'       => Tags::all(),
            'title'      => Title::renderr(' : ', true),
            'banner'       => null,
            'save_url'   => route('root-banners-store'),
        ];

        view()->share('menu_item_active', 'banners');

        return view('root.banners.banner', $data);
    }

    public function store(Requests\StoreBannerRequest $request, $banner_id = null)
    {
        $banner = Banners::findOrNew($banner_id);

        if (empty($banner)) {
            redirect()->back()->withInput();
        }

        if ($request->hasFile('custom_image')) {
            $filename = $this->_uploadMiniature($request->file('custom_image'));
            $banner->custom_image = $filename;
        }

        $banner->banner_type = $request->get('banner_type');
        $banner->banner_position = $request->get('banner_position');
        $banner->title = $request->get('title');
        $banner->html_code = $request->get('html_code');
        $banner->custom_url = $request->get('custom_url');
        $banner->store_id = $request->get('store_id');
        $banner->category_id = $request->get('category_id');
        $banner->tag_id = $request->get('tag_id');
        $banner->status = $request->get('status');
        $banner->published_at = $request->get('published_at');
        $banner->expiry_date = $request->get('expiry_date');
        $banner->save();

        Notifications::add('Banner saved', 'success');

        return Redirect::route('root-banners');
    }

    public function edit($banner_id)
    {
        $banner = Banners::find($banner_id);
        Title::prepend('Edit Banner');
        Title::prepend($banner->id);

        $data = [
            'categories' => Categories::all(),
            'stores' => Stores::all(),
            'tags'       => Tags::all(),
            'banner'       => $banner,
            'title'      => Title::renderr(' : ', true),
            'save_url'   => route('root-banners-store', ['banner_id' => $banner_id]),
        ];

        View::share('menu_item_active', 'banners');

        return view('root.banners.banner', $data);
    }

    public function toDraft($banner_id)
    {
        $this->_setBannerStatus($banner_id, 'draft');
        Notifications::add('Banner sent to drafts', 'success');

        return Redirect::back();
    }

    public function toActive($banner_id)
    {
        $this->_setBannerStatus($banner_id, 'active');
        Notifications::add('Banner published', 'success');

        return Redirect::back();
    }

    public function toDeleted($banner_id)
    {
        //$this->_setBannerStatus($banner_id, 'deleted');
        Banners::find($banner_id)->delete();
        Notifications::add('Banner deleted', 'success');

        return Redirect::back();
    }

    private function _setBannerStatus($banner_id, $status)
    {
        $banner = Banners::find($banner_id);
        $banner->status = $status;
        $banner->save();

        return $banner;
    }

    private function _uploadMiniature($file)
    {
        $path = public_path('upload');
        $thumb_path = public_path('upload/thumb');
        $filename = generate_filename($path, $file->getClientOriginalExtension());
//        $thumbfilename = generate_filename($thumb_path, $file->getClientOriginalExtension());
        $file->move($path, $filename);

        $img = Image::make(sprintf($path.'/%s', $filename));

        // backup status
        $img->backup();

        $img->resize(800, 500);
        $img->save(sprintf($thumb_path.'/800/%s', $filename),100);
        // reset image (return to backup state)
        $img->reset();

        $img->resize(327, 245);
        $img->save(sprintf($thumb_path.'/327/%s', $filename),100);
        $img->reset();

        $img->resize(300, 250);
        $img->save(sprintf($thumb_path.'/300/%s', $filename),100);
        $img->reset();

        $img->resize(250, 250);
        $img->save(sprintf($thumb_path.'/250/%s', $filename),100);
        $img->reset();

        $img->resize(150, 100);
        $img->save(sprintf($thumb_path.'/150/%s', $filename),100);
        $img->reset();

        return $filename;
    }
}

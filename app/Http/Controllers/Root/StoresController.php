<?php

namespace App\Http\Controllers\Root;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Stores;
use App\Models\Posts;
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
        $data = [
            'title'      => Title::renderr(' : ', true),
            'stores' => Stores::i()->allWithPostsCount(),
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
        $store->title = strip_tags($request->get('title'));
        $seo_title = strip_tags($request->get('seo_title'));
        $store->seo_title = (trim($seo_title) == '') ? $store->title : $seo_title;
        $store->seo_description = strip_tags($request->get('seo_description'));
        $store->seo_keywords = strip_tags($request->get('seo_keywords'));

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
        if (request()->get('with_posts', '0') == '1') {
            Posts::where('store_id', $store_id)->delete();
            Notifications::success('Store removed with posts');
        } else {
            Posts::where('store_id', $store_id)->update(['store_id' => '1']);
            Notifications::success('Store removed. Posts moved to Uncategorized');
        }

        return redirect()->route('root-stores');
    }
}

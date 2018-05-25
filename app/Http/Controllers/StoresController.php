<?php

namespace App\Http\Controllers;

use App\Models\Coupons;
use App\Models\Stores;
use Illuminate\Database\QueryException;
use Title;
use Conf;

class StoresController extends Controller
{
    public function __construct()
    {
        Title::prepend(Conf::get('app.sitename'));
    }

    public function index()
    {
        $stores = Stores::i();

        $data = [
            'stores'    => $stores->asort()->paginate(24),
            'title' => Title::renderr(' : ', true),
        ];

        return view('site.stores.index',$data);
    }

    public function view($slug)
    {
        $store = Stores::i()->getBySlug($slug);
        if (empty($store))
            abort(404);

        $store_id = $store->id;
        view()->share('active_category', $store_id);
        view()->share('seo_title', $store->seo_title);
        view()->share('seo_description', $store->seo_description);
        view()->share('seo_keywords', $store->seo_keywords);

        Title::prepend($store->seo_title);

        $coupons = Coupons::i()->where('store_id',$store->id);

        $data = [
            'coupons' => $coupons->active()->sort()->paginate(20),
            'store'    => $store,
            'store_id'    => $store_id,
            'title' => Title::renderr(' : ', true),
            'q' => '',
            ];

        return view('site.stores.view', $data);
    }
}

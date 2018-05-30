<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Coupons;
use App\Models\Stores;
use Illuminate\Database\QueryException;
use Title;
use Conf;

class HomeController extends Controller
{
    public function __construct()
    {
        Title::prepend(Conf::get('app.sitename'));
    }

    public function index($slug = '')
    {
        if ($slug != '') {
            $category = Categories::i()->getBySlug($slug);
            if (empty($category)) {
                abort(404);
            }
            $category_id = $category->id;
            view()->share('active_category', $category_id);
            view()->share('seo_title', 'Категория: '.$category->seo_title);
            view()->share('seo_description', $category->seo_description);
            view()->share('seo_keywords', $category->seo_keywords);

            Title::prepend('Категория');
            Title::prepend($category->seo_title);
        } else {
            Title::append(Conf::get('seo.default.seo_title'));
            $category = null;
            $category_id = null;
        }

        $q = request('q', null);

        if (!empty($q)) {
        }

        $latest_coupons = Coupons::i()->getLatestCoupons();
        //echo "<pre>"; print_r($latest_coupons); echo "</pre>";die;
        $featured_coupons = Coupons::i()->getLatestFeaturedCoupons();
        $categories_with_count = Categories::i()->topWithCouponsCount();
        $featured_stores = Stores::i()->featured()->get();
        $data = [
            'coupons'    => $latest_coupons,
            'featured_coupons'    => $featured_coupons,
            'featured_stores'  => $featured_stores,
            'category' => $category,
            'categories_with_count' => $categories_with_count,
            'q' => $q,
            'title' => Title::renderr(' : ', true),
        ];

        return view('site.home', $data);
    }

    public function view($slug)
    {
        $post = Coupons::i()->getBySlug($slug);
        view()->share('seo_title', $post->seo_title);
        view()->share('seo_description', $post->seo_description);
        view()->share('seo_keywords', $post->seo_keywords);

        Title::prepend($post->seo_title);

        try {
            if ($post->status == 'active') {
                $post->increment('views');
            }
        } catch (QueryException $e) {
            //This is just for demo purposes.
        }

        return view('site.coupons.view', ['post' => $post]);
    }

    public function tag($tag)
    {
        Title::prepend('Тэг: '.$tag);

        $data = [
            'coupons' => Coupons::i()->getCouponsByTag($tag),
            'title' => Title::renderr(' : ', true),
            'q' => '',
        ];
        view()->share('seo_title', $data['title']);

        return view('site.coupons.index', $data);
    }
}

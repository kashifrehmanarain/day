<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Coupons;
use App\Models\Slider;
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

    public function index()
    {
        Title::prepend('Promo, Discount & Coupons');
        $q = request('q', null);

        $latest_coupons = Coupons::i()->getLatestCoupons();
        $featured_coupons = Coupons::i()->getLatestFeaturedCoupons();
        $categories_with_count = Categories::i()->topWithCouponsCount();
        $featured_stores = Stores::i()->featured()->limit(10)->get();
        $slider = Slider::i()->all();

        $data = [
            'coupons'    => $latest_coupons,
            'featured_coupons'    => $featured_coupons,
            'featured_stores'  => $featured_stores,
            'categories_with_count' => $categories_with_count,
            'slider' => $slider,
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

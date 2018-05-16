<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Coupons;
use Illuminate\Database\QueryException;
use Title;
use Conf;

class CouponsController extends Controller
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

        $coupons = Coupons::i()->getCouponsByCategoryId($category_id, $q,10);

        $data = [
            'coupons'    => $coupons,
            'category' => $category,
            'q' => $q,
            'title' => Title::renderr(' : ', true),
        ];

        return view('site.search', $data);
    }

    public function view($slug)
    {
        $coupon = Coupons::i()->getBySlug($slug);
        view()->share('seo_title', $coupon->seo_title);
        view()->share('seo_description', $coupon->seo_description);
        view()->share('seo_keywords', $coupon->seo_keywords);

        Title::prepend($coupon->seo_title);

        try {
            if ($coupon->status == 'active') {
                $coupon->increment('views');
            }
        } catch (QueryException $e) {
            //This is just for demo purposes.
        }

        return view('site.coupons.view', ['coupon' => $coupon]);
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

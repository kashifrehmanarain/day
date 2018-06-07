<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Coupons;
use App\Models\Tags;
use Illuminate\Database\QueryException;
use Title;
use Conf;

class CouponsController extends Controller
{
    public function __construct()
    {
        Title::prepend(Conf::get('app.sitename'));
    }

    public function index()
    {
        $q = request('q', null);

        if (empty($q)) {
            abort(404);
        }

        $coupons = Coupons::i()->search($q)->active()->sort()->paginate(10);

        $data = [
            'coupons'    => $coupons,
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

        return view('site.coupons.view', ['coupon' => $coupon,'q' => '']);
    }

    public function tag($slug)
    {
        $tag = Tags::i()->getBySlug($slug);

        if (empty($tag)) {
            abort(404);
        }

        Title::prepend('Tag : '.$tag->tag);
        view()->share('active_category', $tag->id);
        view()->share('seo_title', ' : '.$tag->seo_title);
        view()->share('seo_description', $tag->seo_description);
        view()->share('seo_keywords', $tag->seo_keywords);

        $coupons = Coupons::i()->getCouponsByTag($tag->id,10);

        $data = [
            'coupons' => $coupons,
            'title' => Title::renderr(' : ', true),
            'q' => '',
        ];

        view()->share('seo_title', $data['title']);

        return view('site.search', $data);
    }

    public function category($slug)
    {
        $category = Categories::i()->getBySlug($slug);

        if (empty($category)) {
            abort(404);
        }

        Title::prepend('Category : '.$category->title);

        view()->share('active_category', $category->id);
        view()->share('seo_title', ' : '.$category->seo_title);
        view()->share('seo_description', $category->seo_description);
        view()->share('seo_keywords', $category->seo_keywords);

        $coupons = Coupons::i()->where('category_id',$category->id);

        $data = [
            'coupons' => $coupons->active()->sort()->paginate(10),
            'title' => Title::renderr(' : ', true),
            'q' => '',
        ];

        view()->share('seo_title', $data['title']);

        return view('site.search', $data);
    }

    public function coupons()
    {
        $coupons = Coupons::i()->typeCoupons()->active()->sort()->paginate(10);

        $data = [
            'coupons'    => $coupons,
            'q' => '',
            'title' => Title::renderr(' : ', true),
        ];

        return view('site.search', $data);
    }

    public function deals()
    {
        $coupons = Coupons::i()->typeDeals()->active()->sort()->paginate(10);

        $data = [
            'coupons'    => $coupons,
            'q' => '',
            'title' => Title::renderr(' : ', true),
        ];

        return view('site.search', $data);
    }

    public function increment($id){
        $coupon = Coupons::find($id);
        $coupon->increment('views');
    }

}

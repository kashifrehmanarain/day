<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Database\QueryException;
use Title;
use Conf;

class CategoriesController extends Controller
{
    public function __construct()
    {
        Title::prepend(Conf::get('app.sitename'));
    }

    public function index()
    {
        $categories = Categories::i()->allWithAlpha();

        $sorted = array();
        foreach($categories as $category){
            $sorted[strtoupper($category->alpha)][] = $category;
        }

        $data = [
            'categories'    => $sorted,
            'title' => Title::renderr(' : ', true),
        ];

        return view('site.categories.index',$data);
    }

    public function view($slug)
    {
        $store = Categories::i()->getBySlug($slug);
        if (empty($store))
            abort(404);

        $store_id = $store->id;
        view()->share('active_category', $store_id);
        view()->share('seo_title', $store->seo_title);
        view()->share('seo_description', $store->seo_description);
        view()->share('seo_keywords', $store->seo_keywords);

        Title::prepend($store->seo_title);

        $data = [
            'store'    => $store,
            'store_id'    => $store_id,
            'title' => Title::renderr(' : ', true),
        ];

        return view('site.categories.view', $data);
    }
}

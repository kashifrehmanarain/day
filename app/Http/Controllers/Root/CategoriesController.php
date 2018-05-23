<?php

namespace App\Http\Controllers\Root;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Categories;
use App\Models\Coupons;
use Notifications;
use Title;

class CategoriesController extends Controller
{
    public function __construct()
    {
        Title::prepend('Admin');
    }

    public function index()
    {
        Title::prepend('Categories');

        $q = request()->get('q', null);
        $categories = Categories::i();

        if (!empty($q)) {
            Title::prepend('Search: ' . $q);
            $categories = $categories->where('title', 'LIKE', '%' . $q . '%');
        }

        $data = [
            'title'      => Title::renderr(' : ', true),
            'categories' => $categories->sort()->paginate(20),
            //'url_params' => request()->except(['q']),
            'url_params' => [],
            'q' => $q,
        ];

        view()->share('menu_item_active', 'categories');

        return view('root.categories.index', $data);
    }

    public function newCategory()
    {
        Title::prepend('New Category');

        $data = [
            'title'    => Title::renderr(' : ', true),
            'category' => null,
            'save_url' => route('root-categories-store'),
        ];

        return view('root.categories.category', $data);
    }

    public function editCategory($category_id)
    {
        $category = Categories::find($category_id);

        Title::prepend('Edit Category');
        Title::prepend($category->title);

        $data = [
            'title'    => Title::renderr(' : ', true),
            'category' => $category,
            'save_url' => route('root-categories-store', ['category_id' => $category->id]),
        ];

        return view('root.categories.category', $data);
    }

    public function store(Requests\StoreCategoryRequest $request, $category_id = null)
    {
        $category = Categories::findOrNew($category_id);
        $category->title = strip_tags($request->get('title'));
        $seo_title = strip_tags($request->get('seo_title'));
        $category->seo_title = (trim($seo_title) == '') ? $category->title : $seo_title;
        $category->seo_description = strip_tags($request->get('seo_description'));
        $category->seo_keywords = strip_tags($request->get('seo_keywords'));

        if ($request->has('update_slug')) {
            $category->resluggify();
        }
        $category->save();

        Notifications::add('Category saved', 'success');

        return redirect()->route('root-categories-edit', ['category_id' => $category->id]);
        return redirect()->route('root-categories-edit', ['category_id' => $category->id]);
    }

    public function remove($category_id)
    {
        $category = Categories::find($category_id);
        $category->delete();
        if (request()->get('with_coupons', '0') == '1') {
            Coupons::where('category_id', $category_id)->delete();
            Notifications::success('Category removed with coupons');
        } else {
            Coupons::where('category_id', $category_id)->update(['category_id' => '1']);
            Notifications::success('Category removed. Coupons moved to Uncategorized');
        }

        return redirect()->route('root-categories');
    }
}

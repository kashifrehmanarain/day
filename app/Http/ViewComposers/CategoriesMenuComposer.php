<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;

class CategoriesMenuComposer
{
    public function compose(View $view)
    {
        $categories = \App\Models\Categories::i()->withPostsCount();
        $stores = \App\Models\Stores::i()->withPostsCount();
        $posts_count = \App\Models\Posts::active()->count();
        $view->with('categories', $categories);
        $view->with('stores', $stores);
        $view->with('posts_count', $posts_count);
    }
}

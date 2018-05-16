<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;

class CategoriesMenuComposer
{
    public function compose(View $view)
    {
        $categories = \App\Models\Categories::i()->withCouponsCount();
        $stores = \App\Models\Stores::i()->withCouponsCount();
        $coupons_count = \App\Models\Coupons::active()->count();
        $view->with('categories', $categories);
        $view->with('stores', $stores);
        $view->with('coupons_count', $coupons_count);
    }
}

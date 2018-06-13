<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;

class BottomStoresComposer
{
    public function compose(View $view)
    {
        $top_stores = \App\Models\Stores::where('is_pinned', 1)->orderBy('id', 'desc')->limit(6)->get();
        $view->with('top_stores', $top_stores);
    }
}

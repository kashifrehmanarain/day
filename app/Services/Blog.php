<?php

namespace App\Services;

use App\Models\Coupons;
use App\Models\Tags;

class Blog
{
    public function getRelatedCoupons($tags, $except = null)
    {
        $limit = 4;
        $tag_ids = $tags->lists('tag');
        $related = Coupons::whereHas('tags', function ($q) use ($tag_ids) {
            $q->whereIn('tag', $tag_ids);
        });
        if (!empty($except)) {
            $related = $related->where('id', '!=', $except);
        }
        $related = $related->active()->orderBy('created_at')
            ->take($limit)
            ->get();

        //If coupons not enough for maximum
        if ($related->count() < $limit) {
            $left = $limit - $related->count();
            $excluded = $related->lists('id')->toArray();
            $excluded[] = $except;
            $additional = Coupons::whereNotIn('id', $excluded)->active()->orderByRaw('RAND()')->limit($left)->get();
            $related = $related->merge($additional);
        }

        return $related;
    }
}

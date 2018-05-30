<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use DB;

class Stores extends Model implements SluggableInterface
{
    use SluggableTrait;

    protected $sluggable = [
        'build_from' => 'seo_title',
        'save_to'    => 'slug',
        'unique'     => true,
    ];
    protected $table = 'stores';
    public static $_instance = null;

    public static function i()
    {
        $class = get_called_class();
        if (!static::$_instance) {
            static::$_instance = new $class();
        }

        return static::$_instance;
    }

    public function coupons()
    {
        return $this->hasMany(Coupons::class, 'store_id');
    }

    public function withCouponsCount()
    {
        $class = get_called_class();

        return $class::leftJoin('coupons', 'coupons.store_id', '=', 'stores.id')
            ->where('coupons.status', 'active')
            ->groupBy('stores.id')
            ->orderBy('stores.title')
            ->get(['stores.*', DB::raw('COUNT(coupons.id) as num')]);
    }

    public function allWithCouponsCount()
    {
        return static::leftJoin('coupons', 'coupons.store_id', '=', 'stores.id')
            ->groupBy('stores.id')
            ->orderBy('stores.title')
            ->get(['stores.*', DB::raw('COUNT(coupons.id) as num')]);
    }

    public function topWithCouponsCount()
    {
        return static::leftJoin('coupons', 'coupons.store_id', '=', 'stores.id')
            ->groupBy('stores.id')
            ->get(['stores.*', DB::raw('COUNT(coupons.id) as num')])
            ->take(9)
            ->sortByDesc(function($store)
            {
                return $store->num;
            });
    }

    public function getBySlug($slug)
    {
        return static::where('slug', 'like', $slug)->first();
    }

    public function scopeSort($query)
    {
        return $query->orderBy('id', 'desc');
    }

    public function scopeAsort($query)
    {
        return $query->orderBy('title', 'asc');
    }

    public function scopeFeatured()
    {
        return $this->where('is_pinned', 1);
    }

}

<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use DB;

class Categories extends Model implements SluggableInterface
{
    use SluggableTrait;

    protected $sluggable = [
        'build_from' => 'seo_title',
        'save_to'    => 'slug',
        'unique'     => true,
    ];
    protected $table = 'categories';
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
        return $this->hasMany(Coupons::class, 'category_id');
    }

    public function withCouponsCount()
    {
        $class = get_called_class();

        return $class::leftJoin('coupons', 'coupons.category_id', '=', 'categories.id')
            ->where('coupons.status', 'active')
            ->groupBy('categories.id')
            ->orderBy('categories.title')
            ->get(['categories.*', DB::raw('COUNT(coupons.id) as num')]);
    }

    public function allWithCouponsCount()
    {
        return static::leftJoin('coupons', 'coupons.category_id', '=', 'categories.id')
            ->groupBy('categories.id')
            ->orderBy('categories.title')
            ->get(['categories.*', DB::raw('COUNT(coupons.id) as num')]);
    }

    public function topWithCouponsCount()
    {
        return static::leftJoin('coupons', 'coupons.category_id', '=', 'categories.id')
            ->where("categories.id","<>",1)
            ->groupBy('categories.id')
            ->get(['categories.*', DB::raw('COUNT(coupons.id) as num')])
            ->take(9)
            ->sortByDesc(function($category)
            {
                return $category->num;
            });
    }

    public function allWithAlpha()
    {
        return static::orderBy('categories.title', 'asc')->get([DB::raw('LEFT(title , 1) as alpha, title, slug')])->all();
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

}

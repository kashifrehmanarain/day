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

    public function posts()
    {
        return $this->hasMany(Posts::class, 'store_id');
    }

    public function withPostsCount()
    {
        $class = get_called_class();

        return $class::leftJoin('posts', 'posts.store_id', '=', 'stores.id')
            ->where('posts.status', 'active')
            ->groupBy('stores.id')
            ->orderBy('stores.title')
            ->get(['stores.*', DB::raw('COUNT(posts.id) as num')]);
    }

    public function allWithPostsCount()
    {
        return static::leftJoin('posts', 'posts.store_id', '=', 'stores.id')
            ->groupBy('stores.id')
            ->orderBy('stores.title')
            ->get(['stores.*', DB::raw('COUNT(posts.id) as num')]);
    }

    public function topWithPostsCount()
    {
        return static::leftJoin('posts', 'posts.store_id', '=', 'stores.id')
            ->groupBy('stores.id')
            ->get(['stores.*', DB::raw('COUNT(posts.id) as num')])
            ->take(9)
            ->sortByDesc(function($store)
            {
                return $store->num;
            });
;
    }

    public function getBySlug($slug)
    {
        return static::where('slug', 'like', $slug)->first();
    }
}

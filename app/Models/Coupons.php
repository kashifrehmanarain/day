<?php

namespace App\Models;

use Cache;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Coupons extends Model implements SluggableInterface
{
    use SluggableTrait;

    protected $sluggable = [
        'build_from' => 'seo_title',
        'save_to'    => 'slug',
        'unique'     => true,
    ];

    protected $table = 'coupons';
    protected $fillable = ['*'];
    public static $_instance = null;

    public static function i()
    {
        $class = get_called_class();
        if (!static::$_instance) {
            static::$_instance = new $class();
        }

        return static::$_instance;
    }

    public function user()
    {
        return $this->belongsTo(Users::class, 'user_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tags::class, 'coupon_tag', 'coupon_id', 'tag_id');
    }

    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id');
    }

    public function store()
    {
        return $this->belongsTo(Stores::class, 'store_id');
    }

    public function getLatestCoupons($limit=12)
    {
        $coupons = $this->with(['category', 'user']);
        $coupons->where('is_pinned', 0);
        return $coupons->active()->sort()->paginate($limit);
    }

    public function getLatestFeaturedCoupons($limit=12)
    {
        $coupons = $this->with(['category', 'user']);
        $coupons->where('is_pinned', 1);
        return $coupons->active()->sort()->paginate($limit);
    }

    public function getCouponsByCategoryId($category_id, $str = null, $limit=12)
    {
        $coupons = $this;
        if (!empty($category_id)) {
            $coupons->where('category_id', $category_id);
        }

        if (!empty($str)) {
            $this->scopeSearch($coupons, $str);
        }

        return $coupons->active()->sort()->paginate($limit);
    }

    public function getCouponsByTag($tag)
    {
        $slug = str_slug($tag, '_');
        $key = 'coupon_tag_'.$slug;
        if (Cache::has($key)) {
            return Cache::get($key);
        } else {
            $tag = Tags::where('tag', 'like', $tag)->first();

            if (is_null($tag)) {
                return null;
            }

            $coupons = $tag->coupons()->active()->paginate(10);
            Cache::put($key, $coupons, 5);
        }

        return $coupons;
    }

    public function getBySlug($slug)
    {
        return $this->with(['user', 'category', 'tags'])->where('slug', $slug)->first();
    }

    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    public function scopeSort($query)
    {
        //return $query->orderBy('is_pinned', 'desc')->orderBy('published_at', 'desc');
        return $query->orderBy('id', 'desc');
    }

    public function scopeByStatus($query, $statuses)
    {
        if (is_array($statuses)) {
            return $query->whereIn('status', $statuses);
        } else {
            return $query->where('status', $statuses);
        }
    }

    public function scopeSearch($query, $str)
    {
        $str = '%' . $str . '%';

        return $query->where('title', 'like', $str)
            ->orWhere('excerpt', 'like', $str)
            ->orWhere('content', 'like', $str);
    }
}

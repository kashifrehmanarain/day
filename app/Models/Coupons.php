<?php

namespace App\Models;

use Cache;
use Carbon\Carbon;
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
        $coupons = $this->with(['category', 'store']);
        $coupons->where('is_pinned', 0);
        return $coupons->active()->sort()->paginate($limit);
    }

    public function getLatestFeaturedCoupons($limit=12)
    {
        $coupons = $this->with(['category', 'store']);
        $coupons->where('is_pinned', 1);
        return $coupons->active()->sort()->paginate($limit);
    }

    public function getCouponsByCategoryId($category_id)
    {
        if (!empty($category_id)) {
            $this->where('category_id', $category_id);
        }

        return $this;
    }

    public function getCouponsBysearchCategoryId($category_id, $str = null, $limit=12)
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

    public function getBySlug($slug)
    {
        return $this->with(['category', 'tags'])->where('slug', $slug)->first();
    }

    public function getCouponsByTag($tag_id, $paginate)
    {
        $tag = Tags::where('id', $tag_id)->first();
        $coupons = $tag->coupons()->active()->sort()->paginate($paginate);
        return $coupons;
    }

    public function scopeActive($query)
    {
        $date = new Carbon;
        return $query->where('store_id','!=', 1)->where('status', 'active')->where('expiry_date','>',$date);
    }

    public function scopeSort($query)
    {
        //return $query->orderBy('is_pinned', 'desc')->orderBy('published_at', 'desc');
        return $query->orderBy('id', 'desc');
    }

    public function scopeSortByPosition($query)
    {
        return $query->orderBy('sort_by', 'asc');
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

        $query->where('title', 'like', $str)
            ->orWhere('excerpt', 'like', $str)
            ->orWhere('content', 'like', $str)
            ->orWhereHas('store', function($query) use($str) {
                $query->where('title', 'like', $str);
            });

        return $query;
    }

    public function scopeTypeCoupons($query)
    {
        return $query->where('coupon_type', 'code');
    }

    public function scopeTypeDeals($query)
    {
        return $query->where('coupon_type', 'deal');
    }
}

<?php

namespace App\Models;

use Cache;

class Banners extends Model
{
    protected $table = 'banners';
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
        return $this->belongsToMany(Tags::class, 'banner_tag', 'banner_id', 'tag_id');
    }

    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id');
    }

    public function store()
    {
        return $this->belongsTo(Stores::class, 'store_id');
    }

    public function getLatestBanners($limit=12)
    {
        $banners = $this->with(['category', 'store']);
        $banners->where('is_pinned', 0);
        return $banners->active()->sort()->paginate($limit);
    }

    public function getLatestFeaturedBanners($limit=12)
    {
        $banners = $this->with(['category', 'store']);
        $banners->where('is_pinned', 1);
        return $banners->active()->sort()->paginate($limit);
    }

    public function getBannersByCategoryId($category_id)
    {
        if (!empty($category_id)) {
            $this->where('category_id', $category_id);
        }

        return $this;
    }

    public function getBannersBysearchCategoryId($category_id, $str = null, $limit=12)
    {
        $banners = $this;
        if (!empty($category_id)) {
            $banners->where('category_id', $category_id);
        }

        if (!empty($str)) {
            $this->scopeSearch($banners, $str);
        }

        return $banners->active()->sort()->paginate($limit);
    }

    public function getBySlug($slug)
    {
        return $this->with(['category', 'tags'])->where('slug', $slug)->first();
    }

    public function getBannersByTag($tag_id, $paginate)
    {
        $tag = Tags::where('id', $tag_id)->first();
        $banners = $tag->banners()->active()->sort()->paginate($paginate);
        return $banners;
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

        $query->where('title', 'like', $str);

        return $query;
    }

    public function scopeTypeBanners($query)
    {
        return $query->where('banner_type', 'code');
    }

    public function scopeTypeDeals($query)
    {
        return $query->where('banner_type', 'deal');
    }
}

<?php

namespace App\Models;

use DB;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Tags extends Model implements SluggableInterface
{
    use SluggableTrait;

    protected $sluggable = [
        'build_from' => 'tag',
        'save_to'    => 'slug',
        'unique'     => true,
    ];

    protected $table = 'tags';
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

    public function coupons()
    {
        return $this->belongsToMany(Coupons::class, 'coupon_tag', 'tag_id', 'coupon_id');
    }

    public function allWithCouponsCount()
    {
        return $this->leftJoin('coupon_tag', 'coupon_tag.tag_id', '=', 'tags.id')
            ->groupBy('tags.id')
            ->orderBy('tags.tag')
            ->get(['tags.*', DB::raw('COUNT(coupon_tag.id) as num')]);
    }

    public function scopeSort($query)
    {
        return $query->orderBy('id', 'desc');
    }

    public function getBySlug($slug)
    {
        return static::where('slug', 'like', $slug)->first();
    }

}

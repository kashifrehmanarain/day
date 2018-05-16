<?php

namespace App\Models;

use DB;

class Tags extends Model
{
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
        return $this->belongsToMany(Coupons::class, 'coupons_tag', 'tag_id', 'coupons_id');
    }

    public function allWithCouponsCount()
    {
        return $this->leftJoin('coupons_tag', 'coupons_tag.tag_id', '=', 'tags.id')
            ->groupBy('tags.id')
            ->orderBy('tags.tag')
            ->get(['tags.*', DB::raw('COUNT(coupons_tag.id) as num')]);
    }
}

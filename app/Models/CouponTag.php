<?php

namespace App\Models;

class CouponTag extends Model
{
    protected $table = 'coupon_tag';
    public static $_instance = null;

    public static function i()
    {
        $class = get_called_class();
        if (!static::$_instance) {
            static::$_instance = new $class();
        }

        return static::$_instance;
    }
}

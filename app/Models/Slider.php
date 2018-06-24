<?php

namespace App\Models;
use DB;

class Slider extends Model
{

    protected $table = 'slider';
    public static $_instance = null;

    public static function i()
    {
        $class = get_called_class();
        if (!static::$_instance) {
            static::$_instance = new $class();
        }

        return static::$_instance;
    }

    public function scopeSort($query)
    {
        return $query->orderBy('sort', 'asc');
    }

}

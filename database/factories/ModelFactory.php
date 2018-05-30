<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(\App\Models\Coupons::class, function ($faker) {
    $title = $faker->realText(100, $indexSize = 2);
    return [
        'title'            => $title,
        'excerpt'          => $faker->paragraph(),
        'content'          => $faker->realText(1000, $indexSize = 2),
        'coupon_type'      => $faker->randomElement(['code','deal']),
        'code'             => str_random(10),
        'url'              => 'https://www.google.com/',
        'slug'  => str_slug($title, '-'),
        'category_id'      => factory('App\Models\Categories')->create()->id,
        'store_id'          => factory('App\Models\Stores')->create()->id,
        'user_id'          => factory('App\Models\Users')->create()->id,
        'status'           => 'active',
        'is_pinned'           => $faker->randomElement([1,0]),
        'expiry_date'     => $faker->dateTimeBetween('+1 week', '+1 month'),
        'published_at'     => $faker->dateTime(),
    ];
});

$factory->define(\App\Models\Users::class, function ($faker) {
    return [
        'name'           => $faker->name,
        'email'          => $faker->email,
        'password'       => str_random(10),
        'remember_token' => str_random(10),
    ];
});

$factory->define(\App\Models\Stores::class, function ($faker) {
    $title = $faker->text(10);
    return [
        'title' => $title,
        'description' => $faker->paragraph(),
        'store_logo' => $faker->imageUrl($width = 600, $height = 400),
        'store_url' => 'https://www.google.com/',
        'slug'  => str_slug($title, '-'),
        'is_pinned'           => $faker->randomElement([1,0]),
    ];
});

$factory->define(\App\Models\Categories::class, function ($faker) {
    $title = $faker->text(10);
    return [
        'title' => $title,
        'slug'  => str_slug($title, '-'),
        'category_icon' => $faker->randomElement(['fa-cutlery', 'fa-calendar', 'fa-female', 'fa-bolt', 'fa-image', 'fa-umbrella', 'fa-shopping-cart', 'fa-home', 'fa-plane'])
    ];
});

$factory->define(\App\Models\Tags::class, function ($faker) {
    $title = $faker->text(10);
    return [
        'tag' => $title,
        'slug'  => str_slug($title, '-')    ];
});
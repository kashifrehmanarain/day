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
        'category_id'      => factory('App\Models\Categories')->create()->id,
        'store_id'          => factory('App\Models\Stores')->create()->id,
        'user_id'          => factory('App\Models\Users')->create()->id,
        'title'            => $title,
        'excerpt'          => $faker->paragraph(),
        'content'          => $faker->realText(1000, $indexSize = 2),
        'img'              => $faker->imageUrl($width = 700, $height = 250),
        'slug'  => str_slug($title, '-'),
        'status'           => 'active',
        'is_pinned'           => $faker->randomElement([1,0]),
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
        'slug'  => str_slug($title, '-'),
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
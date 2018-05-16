<?php

use Illuminate\Database\Seeder;
use Laracasts\TestDummy\Factory;

class CouponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Factory::times(10)->create(App\Models\Coupons::class);
    }
}

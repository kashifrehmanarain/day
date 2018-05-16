<?php

use Illuminate\Database\Seeder;
use Laracasts\TestDummy\Factory;

class StoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Factory::times(15)->create(App\Models\Coupons::class);
    }
}

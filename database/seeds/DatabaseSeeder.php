<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Coupons::class, 30)->create();
        factory(App\Models\Tags::class, 10)->create();
/*        Model::unguard();

        $this->call(StoresTableSeeder::class);

        Model::reguard();*/
    }
}

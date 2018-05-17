<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 255);
            $table->string('seo_title', 255);
            $table->string('seo_keywords', 255);
            $table->string('seo_description', 512);
            $table->string('slug', 512);
            $table->string('category_icon', 33)->default('fa-shopping-cart');
            $table->timestamps();
        });
        $category = new \App\Models\Categories();
        $category->id = 1;
        $category->title = 'Uncategorized';
        $category->slug = 'uncategorized';
        $category->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('categories');
    }
}

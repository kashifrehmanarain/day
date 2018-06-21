<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('banner_position', ['right','bottom','top']);
            $table->string('title');
            $table->enum('banner_type', ['html','custom']);
            $table->text('html_code');
            $table->string('custom_url', 255);
            $table->string('custom_image', 255);
            $table->longText('content');
            $table->integer('store_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->integer('tag_id')->unsigned();
            $table->enum('status', ['active', 'moderation', 'deleted', 'refused', 'draft'])->default('active');
            $table->integer('sort_by')->unsigned();
            $table->dateTime('published_at');
            $table->dateTime('expiry_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('banners');
    }
}

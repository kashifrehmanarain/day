<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('excerpt');
            $table->longText('content');
            $table->enum('coupon_type', ['code','deal']);
            $table->string('code');
            $table->string('url');
            $table->string('slug', 512);
            $table->integer('category_id')->unsigned();
            $table->integer('store_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('seo_title', 255);
            $table->string('seo_keywords', 255);
            $table->string('seo_description', 512);
            $table->boolean('is_pinned')->default(0);
            $table->boolean('views')->default(0)->unsigned();
            $table->enum('status', ['active', 'moderation', 'deleted', 'refused', 'draft'])->default('active');
            $table->integer('sort_by')->unsigned();
            $table->dateTime('expiry_date');
            $table->dateTime('published_at');
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
        Schema::drop('coupons');
    }
}

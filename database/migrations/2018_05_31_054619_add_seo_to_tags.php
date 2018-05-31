<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSeoToTags extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tags', function (Blueprint $table) {
            $table->string('seo_title', 255)->after('tag');
            $table->string('seo_keywords', 255)->after('seo_title');
            $table->string('seo_description', 512)->after('seo_keywords');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tags', function (Blueprint $table) {
            $table->dropColumn('seo_title');
            $table->dropColumn('seo_keywords');
            $table->dropColumn('seo_description');
        });
    }
}

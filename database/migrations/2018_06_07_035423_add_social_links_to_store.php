<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSocialLinksToStore extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stores', function (Blueprint $table) {
            $table->string('facebook_url', 255)->after('is_pinned');
            $table->string('twitter_url', 255)->after('facebook_url');
            $table->string('google_url', 255)->after('twitter_url');
            $table->string('instagram_url', 255)->after('google_url');
            $table->string('pinterest_url', 255)->after('instagram_url');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('stores', function (Blueprint $table) {
            $table->dropColumn('facebook_url');
            $table->dropColumn('twitter_url');
            $table->dropColumn('google_url');
            $table->dropColumn('instagram_url');
            $table->dropColumn('pinterest_url');
        });
    }
}

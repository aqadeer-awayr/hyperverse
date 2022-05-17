<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUsernameToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('username')->after('email')->nullable()->unique();
            $table->string('affiliate_link', 255)->after('username')->nullable();
            $table->string('referral_link', 255)->after('affiliate_link')->nullable();
            $table->string('hc_link', 255)->after('referral_link')->nullable();
            $table->enum('status', ['enabled', 'disabled', 'inactive'])->after('remember_token')->default('inactive');
            $table->string('iframe_count')->after('status')->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('username');
            $table->dropColumn('affiliate_link');
            $table->dropColumn('referral_link');
            $table->dropColumn('hc_link');
            $table->dropColumn('status');
        });
    }
}

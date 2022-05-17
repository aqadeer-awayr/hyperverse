<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCountryIdToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('state_id')->after('hc_link')->nullable();
            $table->unsignedBigInteger('preffered_language')->after('state_id')->nullable();
            $table->foreign('preffered_language')->references('id')->on('languages')
                ->onDelete('cascade');
            $table->foreign('state_id')->references('id')->on('states')
                ->onDelete('cascade');
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
            $table->dropColumn('state_id');
            $table->dropColumn('preffered_language');
        });
    }
}

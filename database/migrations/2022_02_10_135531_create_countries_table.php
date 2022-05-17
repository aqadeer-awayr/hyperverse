<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('iso3', 255);
            $table->string('iso2', 255);
            $table->string('phone_code', 255);
            $table->string('capital', 255);
            $table->string('currency', 255);
            $table->string('native', 255)->nullable();
            $table->string('region', 255)->nullable();
            $table->string('latitude', 255);
            $table->string('longitude', 255);
            $table->string('time_zone', 255);
            $table->tinyInteger('status')->default(1);
            $table->softDeletes();
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
        Schema::dropIfExists('countries');
    }
}

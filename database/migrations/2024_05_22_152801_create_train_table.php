<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 120);
            $table->string('departures_station', 150);
            $table->string('arrivals_station', 150);
            $table->dateTime('departures_hour');
            $table->dateTime('arrivals_hour');
            $table->string('train_code', 15);
            $table->tinyInteger('wagons_number');
            $table->boolean('on_time')->default(true);
            $table->boolean('cancelled')->default(false);

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
        Schema::dropIfExists('trains');
    }
};

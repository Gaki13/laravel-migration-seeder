<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
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
            $table->string('agency', 30);
            $table->string('departure_station', 30);
            $table->string('arrive_station', 30);
            $table->time('departure_hour', 4);
            $table->time('arrive_hour', 4);
            $table->integer('train_code');
            $table->tinyInteger('carriages');
            $table->boolean('in_time');
            $table->boolean('cancelled');
            $table->dateTime('current_date', 6);

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
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('train', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("company", 100);
            $table->string("departure_station", 100);
            $table->string("arrival_station", 100);
            $table->time("departure_time", 6);
            $table->time("arrival_time", 6);
            $table->string("train_code", 4);
            $table->string("number_of_carriages", 10);
            $table->boolean("in_time");
            $table->boolean("deleted");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('train');
    }
}

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
            $table->string('company', 100);
            $table->string('arr_station', 40);
            $table->string('dep_station', 40);
            $table->string('arr_time', 10);
            $table->string('dep_time', 10);
            $table->string('train_code', 10);
            $table->tinyInteger('wagons');
            $table->boolean('on_time');
            $table->boolean('canceled');
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

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('doctor_id');
            $table->foreign('doctor_id')->references('id')->on('doctors') ->onDelete('cascade');
            $table->boolean('sunday')->nullable()->default(false);
            $table->boolean('monday')->nullable()->default(false);
            $table->boolean('tuesday')->nullable()->default(false);
            $table->boolean('wednesday')->nullable()->default(false);
            $table->boolean('thursday')->nullable()->default(false);
            $table->boolean('friday')->nullable()->default(false);
            $table->boolean('saturday')->nullable()->default(false);
            $table->time('hours_from');
            $table->time('hours_to');
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
        Schema::dropIfExists('schedules');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeTemperaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_temperatures', function (Blueprint $table) {
            $table->id();
            $table->time('datetime')->nullable();
            $table->unsignedBigInteger('cid')->nullable();
            $table->string('firstName')->nullable();
            $table->string('device')->nullable();
            $table->float('temperature')->nullable();
            $table->date('date')->nullable();
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
        Schema::dropIfExists('employee_temperatures');
    }
}

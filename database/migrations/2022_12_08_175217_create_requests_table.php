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
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->string('fid');
            $table->string('company');
            $table->string('district');
            $table->string('city');
            $table->string('density');
            $table->string('note')->nullable();
            $table->string('status')->default('pending');
            $table->string('paymentstatus')->default('pending');
            $table->timestamps();

            //$table->foreign('fid')->references('stationid')->on('fuelstations');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requests');
    }
};

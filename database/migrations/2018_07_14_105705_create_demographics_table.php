<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemographicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demographics', function (Blueprint $table) {
            $table->increments('id');
            $table->string('street_address');
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->string('home_phone');
            $table->string('work_phone');
            $table->string('cell_phone');
            // FK to volunteers table
            $table->integer('volunteers_id');
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
        Schema::dropIfExists('demographics');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessionalLicensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professional_licenses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');

            // FK to volunteers table
            $table->integer('demographic_id')->unsigned();
            $table->foreign('demographic_id')->references('id')->on('demographics');
            
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('professional_licenses');
    }
}

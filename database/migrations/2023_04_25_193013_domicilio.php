<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Domicilio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_domicilio', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('domicilio', 250)->nullable();
            $table->integer('numero_exterior')->nullable();
            $table->string('colonia', 250)->nullable();
            $table->string('cp', 10)->nullable();
            $table->string('ciudad', 250)->nullable();
        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_domicilio');
    }
}

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
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('denCur', 50);   //Taller de 
            $table->integer('hrsCur');      //10
            $table->integer('creCur');      //8
            $table->integer('plaCur');      //2010  2022   1990
            $table->string('tipCur', 20);   //Transversal Especialidad
            $table->integer('estCur');      //0,1
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
        Schema::dropIfExists('cursos');
    }
};

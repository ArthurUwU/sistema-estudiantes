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
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();
            $table->string('codEst');
            $table->string('nomEst', 50);
            $table->string('apeEst', 50);
            $table->date('fnaEst');
            $table->integer('turMat');  //1,2,3
            $table->integer('semMat');  //1-6
            $table->integer('estMat');  //0,1
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
        Schema::dropIfExists('estudiantes');
    }
};

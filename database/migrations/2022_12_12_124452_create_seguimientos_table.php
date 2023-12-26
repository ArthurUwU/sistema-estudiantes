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
        Schema::create('seguimientos', function (Blueprint $table) {
            $table->id();
            $table->string('codEst');
            $table->string('traAct', 2);
            $table->string('ofiAct', 50);
            $table->integer('satEst');  //0,1,2,3
            $table->date('fecSeg');
            $table->integer('estSeg');  //0,1
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
        Schema::dropIfExists('seguimientos');
    }
};

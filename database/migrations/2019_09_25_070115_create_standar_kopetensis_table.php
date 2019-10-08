<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStandarKopetensisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('standar_kopetensis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Standar_Kopetensi');
            $table->string('Nama');
            $table->string('Kelas');
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
        Schema::dropIfExists('standar_kopetensis');
    }
}

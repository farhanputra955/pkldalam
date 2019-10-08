<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWalisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('walis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('NISN');
            $table->string('Nama_Ayah');
            $table->string('Pekerjaan_Ayah');
            $table->string('Nama_Ibu');
            $table->string('Pekerjaan_Ibu');
            $table->string('Alamat');
            $table->string('Telepon');
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
        Schema::dropIfExists('walis');
    }
}

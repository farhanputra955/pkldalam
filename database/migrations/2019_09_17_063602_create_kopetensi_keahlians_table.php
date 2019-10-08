<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKopetensiKeahliansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kopetensi_keahlians', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Kopetensi_Kode');
            $table->string('Bidang_Kode');
            $table->string('Kopetensi_Nama');
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
        Schema::dropIfExists('kopetensi_keahlians');
    }
}

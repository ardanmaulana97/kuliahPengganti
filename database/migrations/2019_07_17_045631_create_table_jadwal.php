<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableJadwal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal', function (Blueprint $table) {
        $table->increments('id');
        $table->string("hari");
        $table->string("waktuMulai");
        $table->string("waktuSelesai");
        $table->string("namaMatkul");
        $table->string("tipeMatkul");
        $table->string("kodeMatkul");
        $table->string("paralel");
        $table->string("pjMatkul");
        $table->string("lokasi");
        $table->string("namaRuang");
        $table->string("kapasitasRuang");
        $table->string("pesertaMatkul");
        $table->string("semester");
        $table->softDeletes();
        $table->timestamps();
/*
        hari
        waktuMulai
        waktuSelesai
        tipeMatkul
        kodeMatkul
        paralel
        pjMatkul
        lokasi
        namaRuang
        kapasitasRuang
        pesertaMatkul
        semester
*/

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwal');
    }
}

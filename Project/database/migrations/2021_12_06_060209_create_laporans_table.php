<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporans', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('judul')->nullable(false)->default("");
            $table->string('isiLaporan')->nullable(false)->default("");
            $table->string('lokasiKejadian')->nullable(false)->default("");
            $table->string('instansiTujuan')->nullable(false)->default("");
            $table->string('kategoriLaporan')->nullable(false)->default("");
            $table->string('tanggalKejadian')->nullable(false)->default("");
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
        Schema::dropIfExists('laporans');
    }
}
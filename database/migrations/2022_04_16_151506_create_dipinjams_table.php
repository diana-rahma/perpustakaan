<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDipinjamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dipinjams', function (Blueprint $table) {
            $table->id();
            $table->string('judul_buku');
            $table->string('kode_buku');
            $table->string('file');
            $table->string('tgl_pinjam');
            $table->string('tenggat_pengembalian');
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
        Schema::dropIfExists('dipinjams');
    }
}

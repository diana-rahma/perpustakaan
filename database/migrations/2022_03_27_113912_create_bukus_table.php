<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->id();
            $table->integer('kode')-> nullable() ;
            $table->string('judulbuku');
            $table->string('pengarang');
            $table->string('penerbit');
            $table->integer('tahun');
            $table->string('lokasi');
            $table->foreignId('id_kategori')
            ->constrained('kategori')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('file');
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
        Schema::dropIfExists('bukus');
    }
}

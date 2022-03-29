<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->integer('nisn')-> nullable() ;
            $table->string('nama_siswa');
            $table->string('kelas');
            $table->string('jurusan')-> nullable();
            $table->string('alfabet')-> nullable();
            $table->enum('jk',['Perempuan','Laki-laki']);
            $table->string('telp')-> nullable();
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
        Schema::dropIfExists('siswas');
    }
}

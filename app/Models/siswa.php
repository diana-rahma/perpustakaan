<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;

    protected $table = "siswas";
    protected $primarykey = "id";
    protected $fillable = ['id','nisn','nama_siswa','kelas','jurusan','alfabet','jk','telp'];


    // public function kelas() {

    //     return $this->belongsTo(kelas::class);
    // }
}

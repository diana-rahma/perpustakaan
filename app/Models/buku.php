<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    use HasFactory;

    protected $table = "buku";
    protected $primarykey = "id";
    protected $fillable = ['id','kode','judulbuku', 'pengarang', 'penerbit', 'tahun', 'lokasi', 'id_kategori', 'file'];

    public function pinjam (){
        return $this->hasMany(dipinjam::class, "id_buku","id");
    }

    public function kategori (){
        return $this->belongsTo(kategori::class, "id_kategori","id");
    }
}

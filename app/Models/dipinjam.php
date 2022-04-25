<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dipinjam extends Model
{
    use HasFactory;

    protected $table = "pinjam";
    protected $fillable = ['id','id_buku','id_user','status','tenggat_pengembalian','tanggal_pinjam','tanggal_kembali'];


    public function buku (){
        return $this->belongsTo(buku::class, "id_buku","id");
    }

    public function user (){
        return $this->belongsTo(User::class, "id_user","id");
    }

    public function denda (){
        return $this->hasMany(denda::class, "id_pinjam","id");
    }
}

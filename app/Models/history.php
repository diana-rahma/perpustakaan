<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class history extends Model
{
    use HasFactory;

    protected $table = "histories";
    protected $primarykey = "id";
    protected $fillable = ['id','judul_buku','file','tgl_peminjaman','tgl_pengembalian','denda'];
}

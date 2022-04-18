<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dipinjam extends Model
{
    use HasFactory;

    protected $table = "dipinjams";
    protected $primarykey = "id";
    protected $fillable = ['id','judul_buku','kode_buku','file','tgl_pinjam','tenggat_pengembalian'];
}

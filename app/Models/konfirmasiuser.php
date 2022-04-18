<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class konfirmasiuser extends Model
{
    use HasFactory;

    protected $table = "konfirmasiusers";
    protected $primarykey = "id";
    protected $fillable = ['id','judul_buku','file','status'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class denda extends Model
{
    use HasFactory;

    protected $table = "dendas";
    protected $primarykey = "id";
    protected $fillable = ['id','judul_buku','file','nominal_denda','keterangan'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class denda extends Model
{
    use HasFactory;

    protected $table = "denda";
    protected $primarykey = "id";
    protected $fillable = ['id','id_pinjam','denda','keterangan'];

    public function pinjam (){
        return $this->belongsTo(dipinjam::class, "id_pinjam","id");
    }
}

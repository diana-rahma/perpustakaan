<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class historydenda extends Model
{
    use HasFactory;

    protected $table = "historys";
    protected $primarykey = "id";
    protected $fillable = ['id','namasiswa','judulbuku', 'file', 'nominaldenda', 'keterangan'];
}

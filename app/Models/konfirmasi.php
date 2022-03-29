<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class konfirmasi extends Model
{
    use HasFactory;

    protected $table = "konfirmasis";
    protected $primarykey = "id";
    protected $fillable = ['id','namasiswa','judulbuku','file','status'];
}

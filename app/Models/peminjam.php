<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjam extends Model
{
    use HasFactory;

    protected $table = "peminjams";
    protected $primarykey = "id";
    protected $fillable = ['namasiswa','judulbuku', 'tanggalpinjam', 'tanggalkembali'];
}

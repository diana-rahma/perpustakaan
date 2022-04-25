<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    use HasFactory;

    protected $table = "kelas";
    protected $primarykey = "id";
    protected $fillable = ['id','kelas','jurusan', 'alfabet'];

    public function user (){
        return $this->hasMany(User::class, "id_kelas","id");
    }
}

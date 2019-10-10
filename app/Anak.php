<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anak extends Model
{
     protected $fillable = [
        'nama','kelas','jurusan',
        'foto'
    ];
        public $timestamps = true;

}

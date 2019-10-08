<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wali extends Model
{
     protected $fillable = ['nisn','nama_ayah','pekerjaan_ayah','nama_ibu','pekerjaan_ibu','alamat','telepon'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = ['nisn','kompetensi_kode','nama_siswa','alamat_siswa','tgl_lahir','foto'];

    public $timestamps = true;
  public function bidang()
    {
        return $this->belongsTo('App\Bidang','id_bidang');
    }

    public function guru()
    {
        return $this->belongsTo('App\Guru','id_guru');
    }

    public function nilai()
    {
        return $this->belongsToMany('App\Nilai','id_nilai');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Murid extends Model
{
    
    protected $fillable = [
        'nama','alamat','tgl_lahir','foto',
        
    ];
    public $timestamps = true;

    public function bidang()
    {
        return $this->belongsToMany('App\Bidang','id_bidang');
    }

    public function guru()
    {
        return $this->belongsToMany('App\Guru','id_guru');
    }
    public function nilai()
    {
        return $this->belongsToMany('App\Nilai','id_nilai');
    }

    public function kopetensikeahlian()
    {
        return $this->belongsToMany('App\KopetensiKeahlian','id_kopetensikeahlian');
    }
     public function standarkopetensi()
    {
        return $this->belongsToMany('App\StandarKopetensi','id_standarkopetensi');
    }
      
     public function wali()
    {
        return $this->belongsToMany('App\Wali','id_wali');
    }
}


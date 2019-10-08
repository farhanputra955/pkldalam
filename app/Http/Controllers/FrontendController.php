<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Bidang;
use App\Guru;
use App\Kopetensi;
use App\Nilai;
use App\Siswa;
use App\Standar;
use App\Wali;
use Auth;


class FrontendController extends Controller
{
     public function index()
    {
        return view('frontend.index');
    }

     public function halo()
    {
        return view('frontend.halo');
    }

}

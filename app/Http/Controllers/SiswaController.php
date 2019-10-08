<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\Guru;
use App\Bidang;
use App\Nilai;
use App\Standar;
use App\Kopetensi;
use App\Wali;
use Session;
use File;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::all();
        return view('backend.siswa.index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bidang = Bidang::all();
        $guru = Guru::all();
        $nilai = Nilai::all();
        return view ('backend.siswa.create', compact('bidang','guru','nilai'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        
        $siswa = new Siswa;
        $siswa->nisn = $request->nisn;
        $siswa->kompetensi_kode = $request->kompetensi_kode;
        $siswa->nama_siswa = $request->nama_siswa;
        $siswa->alamat_siswa = $request->alamat_siswa;
        $siswa->tgl_lahir = $request->tgl_lahir;

           if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = public_path() .'/assets/img/siswa';
            $filename =  $file->getClientOriginalName();
            $upload = $file->move(
                $path,
                $filename
            );
            $siswa->foto = $filename;
            return redirect()->route(siswa.index);
        }
        $siswa->save();
        
        Session::flash("flash_notification",[
            "level" => "success",
            "message" => "Berhasil menyimpan<b>"
                         . $siswa->judul
                         ."</b>"
        ]);
        return redirect()->route('siswa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswa = Siswa::findOrfail($id);
        return view('backend.siswa.edit',compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $siswa = Siswa::findOrFail($id);
       $siswa->nisn = $request->nisn;
        $siswa->kompetensi_kode = $request->kompetensi_kode;
        $siswa->nama_siswa = $request->nama_siswa;
        $siswa->alamat_siswa = $request->alamat_siswa;
        $siswa->tgl_lahir = $request->tgl_lahir;
         if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = public_path() .'/assets/img/artikel';
            $filename = $file->getClientOriginalName();
            $uploadSuccess = $file->move(
                $path,
                $filename
            );
        }
        $siswa->save();
        return redirect()->route('siswa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $siswa = Siswa::findOrFail($id);
           $siswa->nisn = $request->nisn;
        $siswa->kompetensi_kode = $request->kompetensi_kode;
        $siswa->nama_siswa = $request->nama_siswa;
        $siswa->alamat_siswa = $request->alamat_siswa;
        $siswa->tgl_lahir = $request->tgl_lahir;
            if ($request->hasFile('foto')) {
                $file = $request->file('foto');
                $path = public_path() .'/assets/img/artikel';
                $filename = str_random(6) . '_'
                . $file->getClientOriginalName();
                $uploadSuccess = $file->move(
                    $path,$filename
                );
            }
            $siswa->delete();
            return redirect()->route('siswa.index');
        }
    }

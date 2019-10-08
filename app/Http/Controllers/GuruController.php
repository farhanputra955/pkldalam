<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;
use Session; 

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guru = Guru::all();
        return view('backend.guru.index', compact('guru'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('backend.guru.create', compact('guru'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $guru = new Guru;
        $guru->nip = $request->nip;
        $guru->nama = $request->nama;
        $guru->alamat = $request->alamat;
        $guru->telepon = $request->telepon;
        $guru->save();
        Session::flash("flash_notification",[
            "level" => "success",
            "message" => "Berhasil menyimpan<b>"
                         . $guru->nip
                         . $guru->nama
                         . $guru->alamat
                         . $guru->telepon."</b>"
        ]);
        return redirect()->route('guru.index');
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
        $guru = Guru::findOrfail($id);
        return view('backend.guru.edit',compact('guru'));
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
        $guru = Guru::findOrFail($id);
        $guru->nip = $request->nip;
        $guru->nama = $request->nama;
        $guru->alamat = $request->alamat;
        $guru->telepon = $request->telepon;
        $guru->save();
        return redirect()->route('guru.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $guru = Guru::findOrFail($id);
        $guru->kopetensi_kode = $guru->kopetensi_kode;
        $guru->bidang_kode = $guru->bidang_kode;
        $guru->kopetensi_nama = $guru->kopetensi_nama;
        $guru->delete();
        return redirect()->route('guru.index');
    }
}

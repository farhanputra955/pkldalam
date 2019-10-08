<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KopetensiKeahlian;
use Session; 

class KopetensiKeahlianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kopetensikeahlian = KopetensiKeahlian::all();
        return view('backend.kopetensikeahlian.index', compact('kopetensikeahlian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('backend.kopetensikeahlian.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kopetensikeahlian = new KopetensiKeahlian;
        $kopetensikeahlian->kopetensi_kode = $request->kopetensi_kode;
        $kopetensikeahlian->bidang_kode = $request->bidang_kode;
        $kopetensikeahlian->kopetensi_nama = $request->kopetensi_nama;
        $kopetensikeahlian->save();
        Session::flash("flash_notification",[
            "level" => "success",
            "message" => "Berhasil menyimpan<b>"
                         . $kopetensikeahlian->kopetensi_kode
                         . $kopetensikeahlian->bidang_kode
                         . $kopetensikeahlian->kopetensi_nama."</b>"
        ]);
        return redirect()->route('kopetensi.index');
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
        $kopetensikeahlian = KopetensiKeahlian::findOrfail($id);
        return view('backend.kopetensikeahlian.edit',compact('kopetensikeahlian'));
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
        $kopetensikeahlian = KopetensiKeahlian::findOrFail($id);
        $kopetensikeahlian->kopetensi_kode = $request->kopetensi_kode;
        $kopetensikeahlian->bidang_kode = $request->bidang_kode;
        $kopetensikeahlian->kopetensi_nama = $request->kopetensi_nama;
        $kopetensikeahlian->save();
        return redirect()->route('kopetensikeahlian.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kopetensikeahlian = KopetensiKeahlian::findOrFail($id);
        $kopetensikeahlian->kopetensi_kode = $kopetensikeahlian->kopetensi_kode;
        $kopetensikeahlian->bidang_kode = $kopetensikeahlian->bidang_kode;
        $kopetensikeahlian->kopetensi_nama = $kopetensikeahlian->kopetensi_nama;
        $kopetensikeahlian->delete();
        return redirect()->route('kopetensi.index');
    }
}

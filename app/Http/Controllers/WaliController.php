<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wali;
use Session; 

class WaliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wali = Wali::all();
        return view('backend.wali.index', compact('wali'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('backend.wali.create', compact('wali'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $wali = new Wali;
        $wali->nisn = $request->nisn;
        $wali->nama_ayah = $request->nama_ayah;
        $wali->pekerjaan_ayah = $request->pekerjaan_ayah;
        $wali->nama_ibu = $request->nama_ibu;
        $wali->pekerjaan_ibu = $request->pekerjaan_ibu;
        $wali->alamat = $request->alamat;
        $wali->telepon = $request->telepon;
        $wali->save();
        Session::flash("flash_notification",[
            "level" => "success",
            "message" => "Berhasil menyimpan<b>"
                         . $wali->nisn
                         . $wali->nama_ayah
                         . $wali->pekerjaan_ayah
                         . $wali->nama_ibu
                         . $wali->pekerjaan_ibu
                         . $wali->alamat
                         . $wali->telepon."</b>"
        ]);
        return redirect()->route('wali.index');
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
        $wali = Wali::findOrfail($id);
        return view('backend.wali.edit',compact('wali'));
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
        $wali = Wali::findOrFail($id);
        $wali->nisn = $request->nisn;
        $wali->nama_ayah = $request->nama_ayah;
        $wali->pekerjaan_ayah = $request->pekerjaan_ayah;
        $wali->nama_ibu = $request->nama_ibu;
        $wali->pekerjaan_ibu = $request->pekerjaan_ibu;
        $wali->alamat = $request->alamat;
        $wali->telepon = $request->telepon;
        $wali->save();
        return redirect()->route('wali.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wali = Wali::findOrFail($id);
        $wali->nisn = $wali->nisn;
        $wali->nama_ayah = $wali->nama_ayah;
        $wali->pekerjaan_ayah = $wali->pekerjaan_ayah;
        $wali->nama_ibu = $wali->pekerjaan_ibu;
        $wali->alamat = $wali->alamat;
        $wali->telepon = $wali->telepon;
        $wali->delete();
        return redirect()->route('wali.index');
    }
}

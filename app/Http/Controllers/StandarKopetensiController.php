<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StandarKopetensi;
use Session; 

class StandarKopetensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $standarkopetensi = StandarKopetensi::all();
        return view('backend.standarkopetensi.index', compact('standarkopetensi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('backend.standarkopetensi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $standarkopetensi = new StandarKopetensi;
        $standarkopetensi->standar_kopetensi = $request->standar_kopetensi;
        $standarkopetensi->nama = $request->nama;
        $standarkopetensi->kelas = $request->kelas;
        $standarkopetensi->save();
        Session::flash("flash_notification",[
            "level" => "success",
            "message" => "Berhasil menyimpan<b>"
                         . $standarkopetensi->standar_kopetensi
                         . $standarkopetensi->nama
                         . $standarkopetensi->kelas."</b>"
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
        $standarkopetensi = StandarKopetensi::findOrfail($id);
        return view('backend.standarkopetensi.edit',compact('standarkopetensi'));
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
        $standarkopetensi = StandarKopetensi::findOrFail($id);
        $standarkopetensi->standar_kopetensi = $request->standar_kopetensi;
        $standarkopetensi->nama = $request->nama;
        $standarkopetensi->kelas = $request->kelas;
        $standarkopetensi->save();
        return redirect()->route('standarkopetensi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $standarkopetensi = StandarKopetensi::findOrFail($id);
        $standarkopetensi->standar_kopetensi = $standarkopetensi->standar_kopetensi;
        $standarkopetensi->nama = $standarkopetensi->nama;
        $standarkopetensi->kelas = $standarkopetensi->kelas;
        $standarkopetensi->delete();
        return redirect()->route('standarkopetensi.index');
    }
}

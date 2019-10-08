<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nilai;
use Session; 

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $nilai = Nilai::all();
        return view('backend.nilai.index', compact('nilai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('backend.nilai.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $nilai = new Nilai;
        $nilai->nilai_huruf = $request->nilai_huruf;
      $nilai->nilai_angka = $request->nilai_angka;
      $nilai->save();
        Session::flash("flash_notification",[
            "level" => "success",
            "message" => "Berhasil menyimpan<b>"
                         . $nilai->nilai_huruf."</b>"
        ]);
        return redirect()->route('nilai.index');
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
      $nilai = Nilai::findOrfail($id);
        return view('backend.nilai.edit',compact('nilai'));
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
      $nilai = Nilai::findOrFail($id);
      $nilai->nilai_huruf = $request->nilai_huruf;
      $nilai->nilai_angka = $request->nilai_angka;
      $nilai->save();
        return redirect()->route('nilai.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $nilai = Nilai::findOrFail($id);
      $nilai->nilai_huruf = $nilai->nilai_huruf;
      $nilai->nilai_angka = $nilai->nilai_angka;
      $nilai->delete();
        return redirect()->route('nilai.index');
    }
}

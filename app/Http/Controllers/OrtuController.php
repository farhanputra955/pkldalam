<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ortu;
use Session; 

class OrtuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ortu = Ortu::all();
        return view('backend.ortu.index', compact('ortu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('backend.ortu.create', compact('ortu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ortu = new Ortu;
        $ortu->nama_ayah = $request->nama_ayah;
        $ortu->pekerjaan_ayah = $request->pekerjaan_ayah;
        $ortu->nama_ibu = $request->nama_ibu;
        $ortu->pekerjaan_ibu = $request->pekerjaan_ibu;
        $ortu->telepon = $request->telepon;
        $ortu->save();
        Session::flash("flash_notification",[
            "level" => "success",
            "message" => "Berhasil menyimpan<b>"
                         . $ortu->nama_ayah
                         ."</b>"
        ]);
        return redirect()->route('ortu.index');
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
        $ortu = Ortu::findOrfail($id);
        return view('backend.ortu.edit',compact('ortu'));
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
        $ortu = Ortu::findOrFail($id);
        $ortu->nama_ayah = $request->nama_ayah;
        $ortu->pekerjaan_ayah = $request->pekerjaan_ayah;
        $ortu->nama_ibu = $request->nama_ibu;
        $ortu->pekerjaan_ibu = $request->pekerjaan_ibu;
        $ortu->telepon = $request->telepon;
        $ortu->save();
        return redirect()->route('ortu.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ortu->nama_ayah = $request->nama_ayah;
        $ortu->pekerjaan_ayah = $request->pekerjaan_ayah;
        $ortu->nama_ibu = $request->nama_ibu;
        $ortu->pekerjaan_ibu = $request->pekerjaan_ibu;
        $ortu->telepon = $request->telepon;
        $ortu->delete();
        return redirect()->route('ortu.index');
    }
}

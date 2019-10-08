<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bidang;
use Session; 

class BidangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $bidang = Bidang::all();
        return view('backend.bidang.index', compact('bidang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('backend.bidang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $bidang = new Bidang;
      $bidang->bidang_nama = $request->bidang_nama;
      $bidang->save();
        Session::flash("flash_notification",[
            "level" => "success",
            "message" => "Berhasil menyimpan<b>"
                         . $bidang->bidang_nama."</b>"
        ]);
        return redirect()->route('bidang.index');
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
      $bidang = Bidang::findOrfail($id);
        return view('backend.bidang.edit',compact('bidang'));
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
      $bidang = Bidang::findOrFail($id);
      $bidang->bidang_nama = $request->bidang_nama;
      $bidang->save();
        return redirect()->route('bidang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $bidang = Bidang::findOrFail($id);
      $bidang->bidang_nama = $bidang->bidang_nama;
      $bidang->delete();
        return redirect()->route('bidang.index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Murid;
use App\Guru;
use App\Bidang;
use App\Nilai;
use App\StandarKopetensi;
use App\KopetensiKeahlian;
use App\Wali;
use Session;
use File;

class MuridController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $murid = Murid::all();
        return view('backend.murid.index', compact('murid'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view ('backend.murid.create', compact('murid'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        
        $murid = new Murid;
        $murid->nama = $request->nama;
        $murid->alamat = $request->alamat;
        $murid->tgl_lahir = $request->tgl_lahir;

           if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = public_path() .'/assets/img/murid';
            $filename =  $file->getClientOriginalName();
            $upload = $file->move(
                $path,
                $filename
            );
            $murid->foto = $filename;
            return redirect()->route(murid.index);
        }
        $murid->save();
        
        Session::flash("flash_notification",[
            "level" => "success",
            "message" => "Berhasil menyimpan<b>"
                         . $murid->nama
                         ."</b>"
        ]);
        return redirect()->route('murid.index');
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

        $murid = Murid::findOrfail($id);
        return view('backend.murid.edit',compact('murid'));
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
       
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $murid = Murid::findOrFail($id);
            $murid->nama = $request->nama;
            $murid->alamat = $request->alamat;
            $murid->tgl_lahir = $request->tgl_lahir;

            if ($request->hasFile('foto')) {
                $file = $request->file('foto');
                $path = public_path() .'/assets/img/artikel';
                $filename = str_random(6) . '_'
                . $file->getClientOriginalName();
                $uploadSuccess = $file->move(
                    $path,$filename
                );
            }
            $murid->delete();
            return redirect()->route('Murid.index');
        }
    }

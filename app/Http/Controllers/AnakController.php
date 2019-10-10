<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anak;
use File;
use Session;
use auth; 

class AnakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $anak = Anak::orderBy('created_at','desc')->get();
        return view('backend.anak.index', compact('anak'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $anak = Anak::all();
        return view ('backend.anak.create',compact('anak'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $anak = new Anak;
       $anak->nama = $request->nama;
       $anak->kelas = $request->kelas;
       $anak->jurusan = $request->jurusan;

         if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = public_path() 
            .'/assets/img/anak';
            $filename = '_'
            . $file->getClientOriginalName();
            $upload = $file->move(
                $path,$filename
            );
            if ($anak->foto) {
                $old_foto = $anak->foto;
                $filepath = public_path(). '/assets/img/' .$anak->foto;
                try {
                    File::delete($filepath);
                }catch (FileNotFoundException $e) { }

               

            }
            $anak->foto = $filename;
        }
        $anak->save();

        return redirect()->route('anak.index');
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
       $anak = Anak::findOrfail($id);
        return view('backend.anak.edit',compact('anak'));
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
       $anak = Anak::findOrFail($id);
       $anak->nama = $request->nama;
       $anak->kelas = $request->kelas;
       $anak->jurusan = $request->jurusan;
       $anak->foto = $request->foto;
         if ($request->hasFile('anak')) {
            $file = $request->file('anak');
            $path = public_path() .'/assets/img/anak';
            $filename = str_random(6) . '_'
            . $file->getClientOriginalName();
            $uploadSuccess = $file->move(
                $path,$filename
            );
            // hapus foto lama jika ada
            if ($anak->anak) {
                $anak = $anak->foto;
                $filepath = public_path() .
                    '/assets/img//' .
                    $anak->anal;
                try {
                    File::delete($filepath);
                } catch (FileNotFoundException $e) {
                    // file sudah dihapus/tidak ada
                }
            }
            $anak->foto = $filename;
        }
       $anak->save();
        return redirect()->route('anak.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $anak = Anak::findOrFail($id);
       
        if ($anak->foto) {
            $old_foto = $anak->foto;
            $filepath = public_path()
            . '/assets/img/anak/' . $anak->foto;
            try {
                File::delete($filepath);
            } catch (FileNotFoundException $e) {
                // file sudah dihapus/tidak ada
            }
        }
        $anak->delete();
        Session::flash("flash_notification",[
            "level" => "success",
            "message" => "Berhasil menghapus <b>"
                         . $anak ->judul."</b>"
        ]);
        return redirect()->route('anak.index');
    }
}

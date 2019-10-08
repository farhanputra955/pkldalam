@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">Membuat Data</div>
                <div class="card-body">
            <form action="{{ route('siswa.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="">NISN</label>
                    <input type="number" name="nisn" id="" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Kompetensi Kode</label>
                    <input type="text" name="kopetensi_kode" id="" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="nama" id="" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" name="alamat" id="" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Tgl Lahir</label>
                    <input type="date" name="tgl_lahir" id="" class="form-control" required>
                </div>
                 <div class="form-group">
                    <label for="">Foto</label>
                    <input type="file" name="foto" id="" class="form-control" required>
                </div>
                <div class="form-group">
                        <button type="submit" class="btn btn-outline-info btn-rounded btn-block">
                        Simpan Data
                        </button>
            </form>
            </div>
            </div>
        </div>
    </div>              
</div>
			
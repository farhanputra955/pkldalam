@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">Membuat Data</div>
                <div class="card-body">
            <form action="{{ route('anak.store') }}" method="post">
                {{ csrf_field() }}
              
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="nama" id="" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Kelas</label>
                    <input type="text" name="kels" id="" class="form-control" required>
                </div>
                 <div class="form-group">
                    <label for="">Jurusan</label>
                    <input type="text" name="jurusan" id="" class="form-control" required>
                </div>
                 <div class="form-group">
                                        <label for="">Foto</label>
                                        <input class="form-control 
                                        @error('foto') is-invalid @enderror" type="file" 
                                        name="foto" id="" required>
                                        @error('foto')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
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
			
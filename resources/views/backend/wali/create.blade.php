@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">Membuat Data</div>
                <div class="card-body">
            <form action="{{ route('wali.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="">NISN</label>
                    <input type="number" name="nisn" id="" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Nama Ayah</label>
                    <input type="text" name="ayah" id="" class="form-control" required>
                </div>
                 <div class="form-group">
                    <label for="">Pekerjaan Ayah</label>
                    <input type="text" name="Pekerjaan" id="" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Nama Ibu</label>
                    <input type="text" name="Ibu" id="" class="form-control" required>
                </div>
                 <div class="form-group">
                    <label for="">Pekerjaan Ibu</label>
                    <input type="text" name="Pekerjaan" id="" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" name="alamat" id="" class="form-control" required>
                </div>
                 <div class="form-group">
                    <label for="">Telepon</label>
                    <input type="number" name="telepon" id="" class="form-control" required>
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
			
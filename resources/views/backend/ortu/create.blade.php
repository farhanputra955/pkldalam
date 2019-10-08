@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">Membuat Data</div>
                <div class="card-body">
            <form action="{{ route('ortu.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="">Nama Ayah</label>
                    <input type="text" name="ayah" id="" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Pekerjaan Ayah</label>
                    <input type="text" name="pekerjaan" id="" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Nama Ibu</label>
                    <input type="text" name="ibu" id="" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Pekerjaan ibu</label>
                    <input type="text" name="pekerjaan" id="" class="form-control" required>
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
			
@extends('layouts.app') 

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script> --}}
    <title>Data Orang Tua</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <center>
                              <a href="{{ route('ortu.create') }}" 
                            class="btn btn-info">Tambah</a></center>
                          
                        <br>
                        <div class="table-responsive">
                            <table id="dt-select" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead class="thead-dark">
                                   <tr>
                                    <th scope="col">No</th>                  
                                        <th scope="col">Nama Ayah </th>
                                         <th scope="col">Pekerjaan Ayah </th>
                                          <th scope="col">Nama Ibu </th>
                                         <th scope="col">Pekerjaan Ibu </th>
                                          <th scope="col"> Telepon</th>
                                        <th colspan="3" class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    @php $no = 1; @endphp
                                    @foreach($ortu as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->nama_ayah }}</td>
                                        <td>{{ $data->pekerjaan_ayah }}</td>
                                        <td>{{ $data->nama_ibu }}</td>
                                        <td>{{ $data->pekerjaan_ibu }}</td>
                                        <td>{{ $data->telepon }}</td>
                                        <td>
                                            <a href="{{ route('ortu.edit',$data->id) }}" 
                                            class="btn btn-info">Edit </a>
                                        </td>
                                        <td>
                                            <form action="{{ route('ortu.destroy',$data->id) }}" method="post">
                                            {{csrf_field()}}
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button class="btn btn-sm btn-danger" type="submit">
                                                    Hapus 
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                            
                                    @endforeach
                            </table>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection
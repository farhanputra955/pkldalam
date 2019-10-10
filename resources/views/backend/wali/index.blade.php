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
    <title>Data Guru</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <center>
                              <a href="{{ route('wali.create') }}" 
                            class="btn btn-primary">Tambah</a></center>
                          
                        <br>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="thead-dark">
                                   
                                    <th scope="col">No</th>                  
                                        <th scope="col">NISN </th>
                                         <th scope="col">Nama Ayah </th>
                                         <th scope="col"> Pekerjaan Ayah  </th>
                                          <th scope="col">Nama Ibu </th>
                                         <th scope="col"> Pekerjaan Ibu  </th>
                                          <th scope="col">Alamat </th>
                                          <th scope="col"> Telepon</th>
                                        <th colspan="3" class="text-center">Aksi</th>
                                    </thead>
                                    @php $no = 1; @endphp
                                    @foreach($wali as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->NISN }}</td>
                                        <td>{{ $data->Nama_Ayah }}</td>
                                        <td>{{ $data->Pekerjaan_Ayah }}</td>
                                        <td>{{ $data->Nama_Ibu }}</td>
                                        <td>{{ $data->Pekerjaan_Ibu }}</td>
                                        <td>{{ $data->Alamat }}</td>
                                        <td>{{ $data->Telepon }}</td>
                                        <td>
                                            <a href="{{ route('wali.edit',$data->id) }}" 
                                            class="btn btn-info">Edit </a>
                                        </td>
                                        <td>
                                            <form action="{{ route('wali.destroy',$data->id) }}" method="post">
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
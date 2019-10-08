@extends('layouts.siswa')

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
    <title>Data siswa</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <center>
                              <a href="{{ route('siswa.create') }}" 
                            class="btn btn-primary">Tambah</a></center>
                          
                        <br>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="thead-dark">
                                   
                                    <th scope="col">No</th>                  
                                        <th scope="col">NISN </th>
                                         <th scope="col">Kopetensi Kode </th>
                                         <th scope="col">Nama </th>
                                          <th scope="col">Alamat </th>
                                          <th scope="col"> Tanggal Lahir</th>
                                            <th scope="col"> Foto</th>
                                        <th colspan="3" class="text-center">Aksi</th>
                                    </thead>
                                    @php $no = 1; @endphp
                                    @foreach($siswa as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->nisn }}</td>
                                        <td>{{ $data->kopetensi_kode }}</td>
                                        <td>{{ $data->nama_siswa }}</td>
                                        <td>{{ $data->alamat_siswa }}</td>
                                        <td>{{ $data->tgl_lahir }}</td>
                                        <td>{{ $data->foto }}</td>
                                        <td>
                                            
                                            <img src="{{asset('assets/img/siswa/' .$data->foto)}}" alt="" height="200px" width="300px">
                                            <a href="{{ route('siswa.edit',$data->id) }}" 
                                            class="btn btn-info">Edit </a>
                                        </td>
                                        <td>
                                            <form action="{{ route('siswa.destroy',$data->id) }}" method="post">
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
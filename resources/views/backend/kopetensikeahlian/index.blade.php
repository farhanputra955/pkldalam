@extends('layouts.kopetensi')

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
    <title>Kopetensi Keahlian</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <center>
                              <a href="{{ route('kopetensi.create') }}" 
                            class="btn btn-primary">Tambah</a></center>
                          
                        <br>
                        <div class="table-responsive">
                           <table id="dt-select" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead class="thead-dark">
                                   
                                    <th scope="col">No</th>
                                        
                                        <th scope="col">Kopetensi Kode</th>
                                         <th scope="col">Bidang Kode</th>
                                          <th scope="col">Kopetensi Nama</th>
                                        <th colspan="3" class="text-center">Aksi</th>
                                    </thead>
                                    @php $no = 1; @endphp
                                    @foreach($kopetensikeahlian as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->Kopetensi_Kode }}</td>
                                        <td>{{ $data->Bidang_Kode }}</td>
                                        <td>{{ $data->Kopetensi_Nama }}</td>
                                        <td>
                                            <a href="{{ route('kopetensi.edit',$data->id) }}" 
                                            class="btn btn-info">Edit </a>
                                        </td>
                                        <td>
                                            <form action="{{ route('kopetensi.destroy',$data->id) }}" method="post">
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
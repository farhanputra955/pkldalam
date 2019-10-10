@extends('layouts.admin')

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
    <title>Bidang</title>
</head>
<body>   
                
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                       
                         <center>
                              <a href="{{ route('bidang.create') }}" 
                            class="btn btn-primary">Tambah</a></center>
                         
                        <br>
                        <div class="table-responsive">
                            <table id="dt-select" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead class="thead-dark">
                                   
                                     <th class="th-sm">No
      </th>
                                         <th class="th-sm">Bidang Studi
      </th>
                                          <th colspan="3" class="text-center">Aksi</th>
                                    </thead>
                                    @php $no = 1; @endphp
                                    @foreach($bidang as $data)
                                    <tr><center>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->Bidang_Nama }}</td>
                                        <td><center>
                                            <a href="{{ route('bidang.edit',$data->id) }}" 
                                            class="btn btn-info">Edit </a>
                                        </td>
                                        
                                        <td><center>
                                            <form action="{{ route('bidang.destroy',$data->id) }}" method="post">
                                            {{csrf_field()}}
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button class="btn btn-sm btn-danger" type="submit">
                                                    Hapus 
                                                </button>
                                            </form>
                                        </td></center>
                                    </tr></center>
                                            
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
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SMK ASSALAAM</title>

  <!-- Custom fonts for this template-->
  <link href="{{asset('assets/kuy/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="{{asset('assets/kuy/vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('assets/kuy/css/sb-admin.css')}}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css"/>


</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">SMK ASSALAAM</a>

   

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
    

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>MENU</span>
        </a>
      </li>
  
      <li class="nav-item">
        <a class="nav-link" href="bidang">
          <i class="fas fa-fw fa-folder"></i>
          <span>Bidang Studi</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="guru">
          <i class="fas fa-fw fa-folder"></i>
          <span>Guru</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="kopetensi">
          <i class="fas fa-fw fa-folder"></i>
          <span>Kopetensi Keahlian</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="nilai">
          <i class="fas fa-fw fa-folder"></i>
          <span>Nilai</span></a>
      </li>
       
       <li class="nav-item">
        <a class="nav-link" href="standar">
          <i class="fas fa-fw fa-folder"></i>
          <span>Standar Kopetensi</span></a>
      </li>
       
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Guru</a>
          </li>
        </ol>

        <!-- Icon Cards-->
      

        <!-- Area Chart Example-->
        

        <!-- DataTables Example -->
     <div class="row">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                   
                    <br>
                        <center>
                              <a href="{{ route('standar.create') }}" 
                            class="btn btn-primary">Tambah Data</a></center>
                          
                        <br>
                        <div class="table-responsive">
                           <table id="dt-select" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead class="thead-dark">
                                   
                                    <th scope="col">No</th>
                                        
                                        <th scope="col">Standar Kopetensi </th>
                                         <th scope="col">Nama</th>
                                          <th scope="col"> Kelas</th>
                                        <th colspan="3" class="text-center">Aksi</th>
                                    </thead>
                                    @php $no = 1; @endphp
                                    @foreach($standarkopetensi as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->Standar_Kopetensi }}</td>
                                        <td>{{ $data->Nama }}</td>
                                        <td>{{ $data->Kelas }}</td>
                                        <td>
                                            <a href="{{ route('standar.edit',$data->id) }}" 
                                            class="btn btn-info">Edit </a>
                                        </td>
                                        <td>
                                            <form action="{{ route('standar.destroy',$data->id) }}" method="post">
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
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->

  <script src="{{asset('assets/kuy/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/kuy/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('assets/kuy/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Page level plugin JavaScript-->
  <script src="{{asset('assets/kuy/vendor/chart.js')}}/Chart.min.js')}}"></script>
  <script src="{{asset('assets/kuy/vendor/datatables/jquery.dataTables.js')}}"></script>
  <script src="{{asset('assets/kuy/vendor/datatables/dataTables.bootstrap4.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('assets/kuy/js/sb-admin.min.js')}}"></script>

  <!-- Demo scripts for this page-->
  <script src="{{asset('assets/kuy/js/demo/datatables-demo.js')}}"></script>
  <script src="{{asset('assets/kuy/js/demo/chart-area-demo.js')}}"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>
  <script>
  $(document).ready(function() {
    $('datatable').DataTable();
} );
  </script>

</body>

</html>

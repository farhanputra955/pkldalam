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
        <a class="nav-link" href="index.html">
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
        <a class="nav-link" href="">
          <i class="fas fa-fw fa-folder"></i>
          <span>Guru</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="">
          <i class="fas fa-fw fa-folder"></i>
          <span>Kopetensi Keahlian</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="">
          <i class="fas fa-fw fa-folder"></i>
          <span>Nilai</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href=""siswa>
          <i class="fas fa-fw fa-folder"></i>
          <span>Siswa</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="">
          <i class="fas fa-fw fa-folder"></i>
          <span>Standar Kopetensi</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="">
          <i class="fas fa-fw fa-folder"></i>
          <span>Wali</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
      
        <!-- Icon Cards-->
      

        <!-- Area Chart Example-->
        

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
           </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">Membuat Data</div>
                <div class="card-body">
            <form action="{{ route('bidang.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="">Bidang Studi</label>
                    <input type="text" name="bidang_nama" id="" class="form-control" required>
                </div>
                <br>
                <div class="form-group">
                    <button type="submit" class="btn btn-outline-info btn-rounded btn-block">
                    Simpan Data
                    </button>
            </form>
        </div>
    </div>              
</div>
                    
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
     

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

</body>

</html>
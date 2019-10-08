
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Welcome</title>
	<meta charset="UTF-8">
	<meta name="description" content="HALO photography portfolio template">
	<meta name="keywords" content="photography, portfolio, onepage, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="{{asset('assets/halo/img/favicon.ico')}}" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset('assets/halo/css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('assets/halo/css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('assets/halo/css/flaticon.css')}}"/>
	<link rel="stylesheet" href="{{asset('assets/halo/css/animate.css')}}"/>
	<link rel="stylesheet" href="{{asset('assets/halo/css/owl.carousel.css')}}"/>
	<link rel="stylesheet" href="{{asset('assets/halo/css/style.css')}}"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section start -->
	<header class="header-section sp-pad">
		<h3 class="site-logo">HALO</h3>
	
		<div class="nav-switch">
			<i class="fa fa-bars"></i>
		</div>
		<nav class="main-menu">
			<ul>
				<li><a href="guru">Guru</a></li>
				<li><a href="bidang">Bidang Studi</a></li>
				<li><a href="standar">Standar Kopetensi</a></li>
				<li><a href="kopetensi">Kopetensi Keahlian</a></li>
				<li><a href="nilai">Nilai</a></li>
			</ul>
		</nav>
	</header>
	<!-- Header section end -->


	<!-- Hero section start -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg sp-pad" data-setbg="{{asset('assets/halo/img/hero-slider/1.jpg')}}">
				<div class="hs-text">
					<br>
					<h5 class="hs-title">Halo Selamat Datang</h5>
				</div>
			
	</section>
	<!-- Hero section end -->


	<!-- Intro section start -->
	
	<!-- Intro section end -->


	<!-- Portfolio section start -->
	
	<!-- Portfolio section end -->


	<!-- Milestones section start -->

	<!-- Milestones section end -->


	<!-- Services section start -->
	
	<!-- Services section start end -->


	<!-- Contact section start -->
	
	<!-- Contact section end -->


	<!-- Footer section start -->
	
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="{{asset('assets/halo/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('assets/halo/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/halo/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('assets/halo/js/mixitup.min.js')}}"></script>
	<script src="{{asset('assets/halo/js/circle-progress.min.js')}}"></script>
	<script src="{{asset('assets/halo/js/main.js')}}"></script>
</body>
</html>
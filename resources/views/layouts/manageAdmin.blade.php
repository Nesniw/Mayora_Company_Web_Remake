<html>
	<head>
		<title>{{ config('app.name') }}</title>
		<link rel="shortcut icon" href="{{ asset('Gambar/MayoraLogo.png') }}">
		<link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.css') }}">
		<link rel="stylesheet" href="{{ url('css/styleAdmin.css') }}">
		<script src="https://kit.fontawesome.com/8f97d656bd.js" crossorigin="anonymous"></script>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Grape+Nuts&family=Poppins:wght@700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
		<script src="{{ url('js/bootstrap.js') }}"></script>
		<script src="{{ url('js/jquery-3.5.1.min.js') }}"></script>
		<script src="{{ url('js/bootstrap.bundle.js') }}"></script>
		
		<style>
			#navbarDD{
				padding-right: 70px;
			}	
		</style>
	</head>
		<!----- Header ----->
		<section class="headerDashboard">
			<nav>
				<a href="/dashboard"><img src="/Gambar/MayoraLogo.png"></a>
				<div class="nav-links" id="LoginNav">
					<ul>
						<li><a href="/dashboard" title="Tetap di halaman Dashboard">DASHBOARD</a></li>
						<li><a href="/ManageProduct" title="Menuju halaman Manage Product">MANAGE PRODUCT</a></li>
						@if(Session::get('level')=="Admin")
						<li><a href="/user" title="Menuju halaman manage User">MANAGE USER</a></li>
						@endif
						@if(Session::get('tbl_user'))
						<li><a href="#">
								{{Session::get('level')}} User &emsp; &nbsp &nbsp <br>{{ Session::get('name') }}
							</a>
							@endif
							<div class="dropdown" id="DDLogin">
								<ul>
									<li><a href="/" title="Menuju Website">Back to Website</a></li>				<!---- MASIH HARUS DIBENERIN ----->
									<li><a href="/logout" title="Keluar dari akun">Logout</a></li>			<!---- MASIH HARUS DIBENERIN ----->
								</ul>
							</div>
						</li>
					</ul>
				</div>
			</nav>
		</section>
		
		<main class="py-4">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						@yield('content')
					</div>
				</div>
			</div>
		</main>
		
		<footer class="py-3 text-light fixed-bottom" id="footerAd">
			<div class="container-fluid">
				<div class="row text-center">
					<div class="col-md-12">
						<small><b>&copy 2022 Mayora. All Rights Reserved.</b></small>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>
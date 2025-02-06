<html>
	<head>
		<meta name="viewport" content="with=device-width, initial-scale=1.0">
		<title>PT. Mayora Indah Tbk. </title>
		<link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.css') }}">
		<link rel="stylesheet" href="{{ url('css/styleUTS.css') }}">
		<link rel="shortcut icon" href="{{ asset('Gambar/MayoraLogo.png') }}">
		<script src="https://kit.fontawesome.com/8f97d656bd.js" crossorigin="anonymous"></script>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Grape+Nuts&family=Poppins:wght@700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
		<script src="{{ url('js/bootstrap.js') }}"></script>
		<script src="{{ url('js/jquery-3.5.1.min.js') }}"></script>
		<script src="{{ url('js/bootstrap.bundle.js') }}"></script>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	</head>
	<body>
		<!----- Header ----->
		<section class="headerDetail">
			<nav>
				<a href="/"><img src="/Gambar/MayoraLogo.png"></a>
				<div class="nav-links" id="LoginNav">
					<ul>
						<li><a href="/" title="Menuju halaman Home">HOME</a></li>
						<li><a href="/history" title="Menuju halaman History">HISTORY</a></li>
						<li><a href="/viewProduct" title="Menuju halaman Product">PRODUCT</a></li>
						<li><a href="/contactus" title="Menuju halaman Contact">CONTACT</a>
							<div class="dropdown" id="DDLogin">
								<ul>
									<li><a href="/contactus" title="Menuju Contact Info">Contact Info</a></li>				
									<li><a href="/contactform" title="Menuju Contact Form">Contact Form</a></li>			
								</ul>
							</div>
						</li>
						@if(Session::get('tbl_user'))
							<li><a href="#" title="Menuju halaman Contact">
									{{Session::get('level')}} User &emsp; &nbsp &nbsp <br>{{ Session::get('name') }}
								</a>
								<div class="dropdown" id="DDLogin">
									<ul>
										@if(Session::get('level')=="Admin" || Session::get('level')=="Staff")
										<li><a href="/dashboard" title="Manage Data">Manage Data</a></li>				
										@endif
										<li><a href="/changePassword" title="Ubah Password">Ubah Password</a></li>
										<li><a href="/logout" title="Keluar dari akun">Logout</a></li>		
									</ul>
								</div>
							</li>
						@else
							<li><a href="/login" title="Menuju halaman Login " id="loginForm"><b>LOGIN</b></a></li>
						@endif
					</ul>
				</div>
			</nav>
		</section>
		
		<!----- Content ----->
		<main class="content">
		
			@yield('content')
			
		</main>
		
		<!----- Footer ----->
		<section class="footer">
			<div class="container2">
				<div class="row">
					<div class="footer-col">
						<h4>PT. Mayora Indah Tbk.</h4>
						<p>Gedung Mayora Jl. Tomang Raya Kav 21-23, Jakarta Barat
						<br><br><br>
						&copy Mayora 2022
						</p>
					</div>
					<div class="footer-col">
						<h4>Products</h4>
						<ul>
							<li><a href="/viewProduct#CT">Beng-Beng</a></li>				
							<li><a href="/viewProduct#CT">Teh Pucuk Harum</a></li>			
							<li><a href="/viewProduct#CT">Energen</a></li>					
						</ul>
					</div>
					<div class="footer-col">
						<h4>Contact</h4>
						<ul>
							<li><a href="/contactus">Contact Info</a></li>			
							<li><a href="/contactform">Contact Us</a></li>			
						</ul>
					</div>
					<div class="footer-col">
						<h4>Dekat dengan kami</h4>
						<p>
							Ikuti beberapa sosial media kami untuk terus mengetahui berita lebih lanjut mengenai PT. Mayora Indah Tbk.
						</p>
						<div class="icons">
							<a href="https://www.facebook.com/pages/category/Company/PT-Mayora-Indah-Tbk-146063082155301/"><i class="fa fa-facebook"></i></a>
							<a href="https://twitter.com/mayorajatake1?lang=en"><i class="fa fa-twitter"></i></a>
							<a href="https://www.instagram.com/mayoraofficial/?hl=en"><i class="fa fa-instagram"></i></a>
							<a href="https://www.linkedin.com/company/pt.-mayora-indah-tbk"><i class="fa fa-linkedin"></i></a>
						</div>
					</div>
				</div>
			</div>
		</section>
	</body>
</html>

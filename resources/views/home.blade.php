@extends('layouts.guest')
	@section('content')

		<!--HTML-->
		<section class="Home" id="sep">
			<h1>Seputar PT. Mayora Indah Tbk.</h1>
			<div class="row">
				<div class="Intro-col" id="IntroL">
					<p>&emsp; &emsp; PT. Mayora Indah Tbk. adalah perusahaan yang bergerak dalam bidang produksi makanan, permen, biskuit, minuman, dan produk jajanan lainnya. Berbagai merk produk jajanan PT. Mayora yang tersebar di Indonesia dan sudah hampir mendunia antara lain Kopiko, Astor, Energen, Torabika, dan masih banyak lainnya. Produk jajanan yang sudah hampir mendunia ini juga sudah mempromosikan produk melalui iklan-iklan yang ada di tayangan televisi nasional. Melalui iklan tersebut, PT. Mayora Indah Tbk. mulai dikenal secara nasional hingga internasional dan seiring berjalannya waktu, produk PT. Mayora Indah Tbk. mulai diproduksi di benua lain selain Asia, seperti di Eropa, Amerika Barat dan Selatan, Afrika, Antartika, dan Australia. PT. Mayora Indah Tbk. terus berkembang hingga pada masa kini dan berbagai produknya sudah dikenal oleh masyarakat Indonesia maupun di luar Indonesia.</p>
					<br>
					<a href="/history" class="Winsen-btn"><i class="fa-solid fa-angle-right"></i> &nbsp; Cari Tahu Lebih Lanjut Tentang Perusahaan Kami</a>
				</div>
				<div class="Intro-col" id="IntroR">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/vZDnmmlk8Uc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<h1> Perjalanan PT. Mayora Indah Tbk. </h1>
			<div class="row" id="Now">
				<div class="Now-col">
					<img src="Gambar/MayoraLogo.png">
				</div>
				<div class="Now-col">
					<h1> 45 </h1>
					<p>tahun berdiri di Indonesia</p>
				</div>
				<div class="Now-col">
					<h1> 30.000+ </h1>
					<p>karyawan tergabung dalam keluarga PT. Mayora</p>
				</div>
				<div class="Now-col">
					<h1> 100% Halal </h1>
					<p>pada produk PT. Mayora</p>
				</div>
				<div class="Now-col">
				</div>
			</div>
			<h1>Penghargaan PT. Mayora Indah Tbk.</h1>
			<div class="row">
				<div class="Achieve-col" id="AL">
					<div class="slider">
						<div class="slides">
							<input type="radio" name="radio-btn" id="radio1">
							<input type="radio" name="radio-btn" id="radio2">
							<input type="radio" name="radio-btn" id="radio3">
							<input type="radio" name="radio-btn" id="radio4">

							<div class="slide first">
								<img src="Gambar/Achieve1.png" alt="">
							</div>
							<div class="slide">
								<img src="Gambar/Achieve2.png" alt="">
							</div>
							<div class="slide">
								<img src="Gambar/Achieve3.png" alt="">
							</div>
							<div class="slide">
								<img src="Gambar/Achieve4.jpg" alt="">
							</div>

							<div class="navigation-auto">
								<div class="auto-btn1"></div>
								<div class="auto-btn2"></div>
								<div class="auto-btn3"></div>
								<div class="auto-btn4"></div>
							</div>
						</div>

						<div class="navigation-manual">
							<label for="radio1" class="manual-btn"></label>
							<label for="radio2" class="manual-btn"></label>
							<label for="radio3" class="manual-btn"></label>
							<label for="radio4" class="manual-btn"></label>
						</div>
					</div>
				</div>
				<div class="Achieve-col" id="AR">
					<h4>Penghargaan yang pernah diterima PT. Mayora Indah Tbk : </h4>
					<p>
						- Top 100 Exporter Companies in Indonesia dari Majalah SWA<br><br>
						- Top 5 Best Managed Companies in Indonesia dari Asia Money<br><br>
						- Top 100 Public Listed Companies (2009-2010) dari Investor<br> &nbsp; &nbsp; Magazine Indonesia<br><br>
						- Pemenang Kategori Inovasi Produk dan Inovasi Program dalam <br> &nbsp; &nbsp; Peduli Gizi (2015)<br><br>
						- ASEAN Business Awards 2020<br><br>
						- Kategori Priority Integration Sector (Agri based products)<br><br>
						- Top 5 Performing Listed Company(2017) versi Majalah Investor
					</p>
				</div>
			</div>
		</section>
		
		<script type="text/javascript">
			var counter = 1;
			setInterval(function(){
				document.getElementById('radio' + counter).checked = true;
				counter++;
				if(counter > 4){
					counter = 1;
				}
			}, 5000);
		</script>
		
	@endsection
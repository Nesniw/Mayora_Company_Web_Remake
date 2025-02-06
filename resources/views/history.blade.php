@extends('layouts.nonHomeGuest')
	@section('content')

		<!--HTML-->
		<section class="History">
			<h1>Tentang PT. Mayora Indah Tbk.</h1>
			<p>Mengenal lebih jauh mengenai PT. Mayora Indah Tbk.</p>
			</div>
			<div class="row">
				<div class="History-col" id="History-col-left">
					<div class="slider">
						<div class="slides">
							<input type="radio" name="radio-btn" id="radio1">
							<input type="radio" name="radio-btn" id="radio2">
							<input type="radio" name="radio-btn" id="radio3">
							<input type="radio" name="radio-btn" id="radio4">

							<div class="slide first">
								<img src="Gambar/Owner.jpg" alt="">
							</div>
							<div class="slide">
								<img src="Gambar/Mayora-His.jpg" alt="">
							</div>
							<div class="slide">
								<img src="Gambar/Produk.jpg" alt="">
							</div>
							<div class="slide">
								<img src="Gambar/Mayora2-His.jpg" alt="">
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
				<div class="History-col" id="History-col-right">
					<h1>Riwayat Singkat Perusahaan</h1>
					<p>
						 &emsp; &nbsp; PT. Mayora Indah Tbk. (Perseroan) didirikan pada tahun 1977 dengan pabrik pertama berlokasi di Tangerang dengan target market wilayah Jakarta dan sekitarnya. Setelah mampu memenuhi pasar Indonesia, Perseroan melakukan Penawaran Umum Perdana dan menjadi perusahaan publik pada tahun 1990 dengan target market; konsumen Asean. Kemudian melebarkan pangsa pasarnya ke negara negara di Asia. Saat ini produk Perseroan telah tersebar di 5 benua di dunia. 
			 			<br> <br>
						 &emsp; Sebagai salah satu Fast Moving Consumer Goods Companies, PT. Mayora Indah Tbk telah membuktikan dirinya sebagai salah satu produsen makanan berkualitas tinggi dan telah mendapatkan banyak penghargaan, diantaranya adalah “Top Five Best Managed Companies in Indonesia” dari Asia Money, “Top 100 Exporter Companies in Indonesia” dari majalah Swa, “Top 100 public listed companies” dari majalah Investor Indonesia, “Best Manufacturer of Halal Products” dari Majelis Ulama Indonesia, Best Listed Company dari Berita Satu, “Indonesia’s Corporate Secretary Award, Top 5 Good Corporate Governance Issues in Consumer Goods Sector, dari Warta Ekonomi dan banyak lagi penghargaan lainnya.
					</p>
				</div>
			</div>
			<div class="row">
				<div class="Profil-col" id="Profil-col-left">
					<h1>Profil Pendiri PT. Mayora Indah Tbk.</h1>
					<p>
						 &emsp; &nbsp; Jogi Hendra Atmadja adalah pendiri perusahaan Mayora yang dilahirkan di Jakarta pada tahun 1946. Setelah menamatkan sekolah menengah atas, ia kemudian melanjutkan pendidikannya di Fakultas Kedokteran, Universitas Trisakti. Setelah lulus dari sana, Jogi Hendra Atmadja bersama dengan Drs. Raden Soedigdo dan Ir. Darmawan Kurnia mendirikan PT Mayora Indah pada tanggal 17 februari 1977 di Jakarta dan kini menjabat sebagai komisaris utama dalam perusahaan Mayora. Lalu pada tahun 2016, total kekayaan Jogi Hendra Atmadja sebagai pendiri Mayora sekitar 10.6 triliun dan menempati posisi 35 dalam daftar orang terkaya di Indonesia. Kemudian pada awal tahun 2018, harta kekayaan Jogi Hendra Atmadja naik hampir tiga kali lipat sekitar 33.75 triliun rupiah. Hal ini menyusul naiknya harga saham perusahaan Mayora. Harta kekayaan yang meningkat membuat posisi Jogi Hendra Atmadja sebagai salah satu pengusaha terkaya di Indonesia melesat hingga ke urutan 10 besar orang terkaya di Indonesia. Selain itu, mengenai keluarga Jogi Hendra Atmadja, Jogi Hendra Atmadja memiliki tiga orang anak bernama Andre Sukendra Atmadja, Hendarta Atmadja dan Wardhana Atmadja, ketiganya menjabat sebagai direksi utama dalam PT Mayora Indah.
					</p>
				</div>
				<div class="Profil-col" id="Profil-col-right">
					<img src="Gambar/Yogi.jpeg">
					<h1>Jogi Hendra Atmadja</h1>
				</div>
			</div>
			<h1 id="VisMis"> Visi Misi Perusahaan</h1><br>
			<div class="row">
				<div class="VisiMisi-col">
					<img src="Gambar/Visi1.jpg">
					<div class="layer-VisiMisi">
						<h3>01</h3>
						<p>Menjadi produsen makanan dan minuman yang berkualitas dan terpercaya di mata konsumen domestik maupun internasional dan menguasai pangsa pasar terbesar dalam kategori produk sejenis.</p>
					</div>
				</div>
				<div class="VisiMisi-col">
					<img src="Gambar/Visi2.jpg">
					<div class="layer-VisiMisi" id="VisiMisi2">
						<h3>02</h3>
						<p>Dapat memperoleh Laba Bersih Operasi diatas rata-rata industri dan memberikan value added yang baik bagi seluruh stakeholders Perseroan.</p>
					</div>
				</div>
				<div class="VisiMisi-col">
					<img src="Gambar/Visi3.jpg">
					<div class="layer-VisiMisi" id="VisiMisi3">
						<h3>03</h3>
						<p>Dapat memberikan kontribusi positif terhadap lingkungan dan negara dimana Perseroan berada.</p>
					</div>
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
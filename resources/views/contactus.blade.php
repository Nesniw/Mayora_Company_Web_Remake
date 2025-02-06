@extends('layouts.nonHomeGuest')
	@section('content')

		<!--HTML-->
		<section class="Contact">
			<h1 id="info">Hubungi PT. Mayora Indah Tbk.</h1>
			<p>Jika terdapat pertanyaan seputar PT. Mayora Indah Tbk. silahkan menghubungi kami pada kontak yang tertera di bawah <br> atau dapat mengirimkan pesan secara langsung melalui Contact Form</p>

			<div class ="row">
				<div class="Contact-col">
					<img src="Gambar/Winsen 500.png">
					<div>
						<p> Nama&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &nbsp; &nbsp; &nbsp; : &emsp; Winsen Wiradinata<br>
							NIM&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;  &nbsp; &nbsp; &nbsp; : &emsp; 31200055<br>
							Nomor Telepon&emsp; &emsp; &nbsp; &nbsp; &nbsp; &nbsp;: &emsp; 08889522302<br>
							Email&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &nbsp; &emsp; : &emsp; Animeheroic8@gmail.com<br>
							Alamat Perusahaan &emsp; : &emsp; Jl. Tomang Raya Kav 21 – 23, <br>
							&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; Jakarta Barat
						</p>
						<br>
						<p>Lokasi perusahaan pada Google Maps : </p>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.651645921926!2d106.79688421744385!3d-6.177365299999992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f6e33b17cae1%3A0xd0d88edd4fcad23d!2sPT%20Mayora%20Indah%20Tbk!5e0!3m2!1sid!2sid!4v1649239380930!5m2!1sid!2sid" width="500" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>
				<div class="Contact-col">
					<img src="Gambar/Abel 500.png">
					<div>
						<p> Nama&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &nbsp; &nbsp; &nbsp; : &emsp; Nathaniel Abelardus<br>
							NIM&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;  &nbsp; &nbsp; &nbsp; : &emsp; 31200043<br>
							Nomor Telepon&emsp; &emsp; &nbsp; &nbsp; &nbsp; &nbsp;: &emsp; 085814272383<br>
							Email&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &nbsp; &emsp; : &emsp; Nathanielabel30@gmail.com<br>
							Alamat Perusahaan &emsp; : &emsp; Jl. Tomang Raya Kav 21 – 23, <br>
							&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; Jakarta Barat
						</p>
						<br>
						<p>Lokasi perusahaan pada Google Maps : </p>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.651645921926!2d106.79688421744385!3d-6.177365299999992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f6e33b17cae1%3A0xd0d88edd4fcad23d!2sPT%20Mayora%20Indah%20Tbk!5e0!3m2!1sid!2sid!4v1649239380930!5m2!1sid!2sid" width="500" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>
			</div>
		</section>
		
		<!----JavaScript alert setelah submit---->
		<script>
			function berhasil(){
				alert('Berhasil mengirimkan pesan!');
				
				$("#submit").click(function() {
					
					var nama = $("#nama").val();
					var email = $ ("#email").val();
					var hp = $ ("#hp").val();
					var alamat = $ ("#alamat").val();
					var negara = $ ("#negara").val();
					var kota = $ ("#kota").val();
					var pesan = $ ("#pesan").val();
					
					if(nama == '' || email == '' || hp == '' || alamat == '' || negara == '' || kota == '' || pesan == '') {
					
						swal({
								title: "Masih Kosong!!",
								text: "Tolong diisi terlebih dahulu!!",
								icon: "warning",
								button: "Ok",
						});
					}
					else{
						
						swal({
								title: "Terima kasih atas pesannya!!",
								icon: "success",
								button: "Ok",
						});
					}					
				}
			}
		</script>
			
	@endsection

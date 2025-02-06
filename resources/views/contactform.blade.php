@extends('layouts.nonHomeGuest')
	@section('content')

		<!--HTML-->
		<section class="Contact">
			<h1 id="info">Kami senang untuk mendengar dari Anda.</h1>
			<p> Berikan tanggapan dan saran Anda untuk perusahaan kami 
				<br> dengan mengisi form di bawah ini
			</p>

			<div class="row">
				<div class="form-col" id="form">
					<form name="forem" onSubmit="berhasil()" action="/contactform">
						<h1>Contact Form</h1>
						<input type="text" id="nama" placeholder="Nama" required> <br>
						<input type="email" id="email" placeholder="Alamat Email" required> <br>
						<input type="number" id="hp" placeholder="Nomor Telepon" required> <br>
						<input type="text" id="alamat" placeholder="Alamat" required> <br>
						<input type="text" id="negara" placeholder="Negara" required> <br>
						<input type="text" id="kota" placeholder="Kota" required> <br>
						<textarea rows="10" id="pesan" placeholder="Pesan Anda" required></textarea> <br>
						<button type="submit">Kirim</button> &emsp;
						<button type="reset">Reset</button>
					</form>
				</div>
			</div>
		</section>
		
		<!----JavaScript alert setelah submit---->
		
		<script>
			function berhasil() {
				swal({
					  title: "Berhasil mengirim!",
					  text: "Terima kasih atas pesannya",
					  icon: "success",
				})
				event.preventDefault();
				document.forem.reset();
			}
		</script>
			
	@endsection

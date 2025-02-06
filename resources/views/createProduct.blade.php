@extends('layouts.manageAdmin')
	@section('content')
		<!--html-->
		<div class="row justify-content-center align-items-center">
			<div class="col-md-6 col-sm-12 bg-white p-4">
			@if($message = Session::get('failed'))
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<b>{{ $message }}</b>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				</div>
			@endif
				<h2> Create New Product  Data </h2><br>
				<form method="post" action="process" enctype="multipart/form-data">
				@csrf
					<div class="form-group">
						<label class="font-weight-bold">Kode Product</label>
						<input type="text" class="form-control" name="kode" placeholder="Masukkan kode product" value="{{old('kd_brg')}}" required>
					</div>
					
					<div class="form-group">
						<label class="font-weight-bold">Foto Product</label>
						<input type="file" class="form-control" name="foto" accept=".jpg, .jpeg, .png" required>
					</div>
					
					<div class="form-group">
						<label class="font-weight-bold">Nama Product</label>
						<input type="text" class="form-control" name="nama" placeholder="Masukkan nama product" value="{{old('nama_brg')}}" required>
					</div>
					
					<div class="form-group">
						<label class="font-weight-bold">Harga Product</label>
						<input type="number" class="form-control" name="harga" placeholder="Masukkan harga product" value="{{old('hrg_brg')}}" required>
					</div>
					
					<div class="form-group">
						<label class="font-weight-bold">Deskripsi Product</label>
						<textarea class="form-control" name="deskripsi" rows="5" placeholder="Masukkan deskripsi product" required>{{old('deskripsi')}}</textarea>
					</div>
					
					<div class="form-group">
						<input type="submit" class="form-control btn btn-primary" id="btnA" value="Add">
					</div>
					<div class="form-group" id="cancelC">
						<a href="/ManageProduct"><input type="button" class="form-control btn btn-danger" id="btnC" value="Cancel"></a>
					</div>
				</form>
			</div>
		</div>
   @endsection
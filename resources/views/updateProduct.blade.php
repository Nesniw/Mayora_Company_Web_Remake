@extends('layouts.manageAdmin')
	@section('content')
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
				<h2> Update Data Product</h2><br>
				<form method="post" action="process" enctype="multipart/form-data">
				@csrf
					<div class="form-group">
						<label class="font-weight-bold">Kode Product</label>
						<input type="text" class="form-control" name="kode" value="{{ $dtp->kd_product }}" readonly>
					</div>
					
					<div class="form-group">
						<label class="font-weight-bold">Foto Product</label>
						<input type="file" class="form-control" name="foto" accept=".jpg, .jpeg, .png">
					</div>
					
					<div class="form-group">
						<label class="font-weight-bold">Nama Product</label>
						<input type="text" class="form-control" name="nama" placeholder="Masukkan nama product" value="<?=(old('nama_product')=='')? $dtp->nama_product : old('nama_product')?>" required>
					</div>
					
					<div class="form-group">
						<label class="font-weight-bold">Harga Product</label>
						<input type="number" class="form-control" name="harga" placeholder="Masukkan harga product" value="<?=(old('hrg_product')=='')? $dtp->hrg_product : old('hrg_product')?>" required>
					</div>
					
					<div class="form-group">
						<label class="font-weight-bold">Deskripsi Product</label>
						<textarea class="form-control" name="deskripsi" rows="5" placeholder="Masukkan product" required><?=(old('deskripsi')=='')? $dtp->deskripsi : old('deskripsi')?></textarea>
					</div>
					
					<div class="form-group">
						<input type="submit" class="form-control btn btn-primary" id="btnU" value="Update">
					</div>
					
					<div class="form-group" id="CancelU">
						<a href="/ManageProduct"><input type="button" class="form-control btn btn-danger" id="btnD" value="Cancel"></a>
					</div>
				</form>
			</div>
		</div>
   @endsection
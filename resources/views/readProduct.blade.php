@extends('layouts.manageAdmin')
	@section('content')
		<style>
			.table{
				text-align: center;
				
			}
			#btn-create{
				font-family: monospace;
				transition: all 0.5s ease-in-out;
				border-radius: 40%;
			}
			#btn-create:hover{
				background-color: black;
				border-radius: 7%;
			}
			#btnU{
				opacity: 0.7;
				font-family: monospace;
				border-radius: 40%;
				transition: all 0.5s ease-in-out;
			}
			#btnD{
				opacity: 0.7;
				font-family: monospace;
				border-radius: 40%;
				transition: all 0.5s ease-in-out;
			}
			#btnU:hover{
				opacity: 1;		
				border-radius: 10%;
			}
			#btnD:hover{
				opacity: 1;
				border-radius: 10%;
			}
			
		</style>
		
		@if($message = Session::get('success'))
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<b>{{ $message }}</b>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			</div>
		@elseif($message = Session::get('failed'))
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<b>{{ $message }}</b>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			</div>
		@endif
		<div class="col-md-12 bg-white p-4">
         		<div class="row">
				<div class="col-md-8">
					<a href="/ManageProduct/create/"><button class="btn btn-secondary mb-3" id="btn-create">
					Create New Data</button></a>
				</div>
				<div class="col-md-4">
					<form action="/ManageProduct"  method="get">
						<div class="input-group mb-3">
							<input type="text" class="form-control shadow-sm" 
							placeholder="Search Kode/Nama/Harga" name="keyword" 
							value="<?= (isset($_GET['keyword']))?$_GET['keyword']:''; ?>">
							<div class="input-group-append">
								@if(isset($_GET['keyword']))
									<a class="btn btn-outline-danger shadow-sm" href="/ManageProduct">
									&times;</a>
								@else
									<button class="btn btn-outline-primary shadow-sm" type="submit">
									<span class="fa-solid fa-magnifying-glass"></span></button>
								@endif
							</div>
						</div>
					</form>
				</div>
			</div><br>
			<div class="row">
				<table class="table table-responsive table-hover table-stripped">
					<thead>
						<tr class="table-info">
							<th width="5%">No.</th>
							<th width="5%">Gambar</th>
							<th width="10%">Kode Product</th>
							<th width="10%">Nama Product</th>
							<th width="10%">Harga Product</th>
							<th width="20%">Deskripsi</th>
							<th width="15%">Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($dtp as $i => $p)
							<tr>
								<td>{{ ++$i }}</td>
								<td><img src="{{ url('/product/'.$p->foto_product) }}" class="rounded-circle" width="80" height="80"></td>
								<td>{{ $p->kd_product }}</td>
								<td>{{ $p->nama_product }}</td>
								<td>{{ $p->hrg_product }}</td>
								<td>{{ $p->deskripsi }}</td>
								<td>
									<a href="/ManageProduct/update/{{ $p->kd_product }}/">
									<button class="btn btn-success" id="btnU">Update</button></a>
									<a href="/ManageProduct/delete/{{ $p->kd_product }}">
									<button class="btn btn-danger" id="btnD">Delete</button></a>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
   @endsection
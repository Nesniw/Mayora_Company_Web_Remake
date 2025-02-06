@extends('layouts.detailProductSet')
	@section('content')
		<div class="row2">
			<div class="Product-col">
				<img src="{{ url('/product/'.$dtp->foto_product) }}" class="img-fluid rounded-circle" width="350"><br>
			</div>
			<div class="Product-col" id="ColDP">
				<div>
					<h2>{{ $dtp->nama_product }}</h2>
					<p>Kode Product: {{ $dtp->kd_product }}</p><br>
				</div>
				<div>
					<h4>Informasi Product</h4>
					<table class="table">
						<tr>
							<td class="font-weight-bold" width="20%" id="tbP1">Price</td>
							<td>Rp{{ $dtp->hrg_product }}</td>
						</tr>
						<tr>
							<td class="font-weight-bold" width="20%" id="tbP1">Description</td>
							<td align="justify">{{ $dtp->deskripsi }}</td>
						</tr>
					</table>
				</div>
				<br><a href="/viewProduct" class="btn btn-primary" id="btnPr">Back</a>
			</div> 
		</div>
   @endsection
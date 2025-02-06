@extends('layouts.productSet')
	@section('content')
		
		<!--HTML-->
		<section class="Product">
			<h1 id="CT">Produk PT. Mayora Indah Tbk.</h1>
			<p>Mengenal produk-produk unggulan dari PT. Mayora Indah Tbk.</p>
			<div class="row">
			@foreach ($dtp as $i => $p)
				<div class="col-md-3 col-sm-12">
					<div class="card border-0" style="width:18rem; float: left; margin: 20px;">
						<img src="{{ url('/product/'.$p->foto_product) }}" class="card-img-top img-responsive rounded-circle">
						<div class="card-body">
							<h5 class="card-title">{{ $p->nama_product }}</h5>
							<h6 class="card-subtitle mb-2 text-muted">{{ $p->kd_product }}</h6>
							<a href="/viewProduct/{{ $p->kd_product }}" class="btn btn-primary">Detail</a>
						</div>
					</div>
				</div>
			@endforeach
			</div>
		</section>
	@endsection

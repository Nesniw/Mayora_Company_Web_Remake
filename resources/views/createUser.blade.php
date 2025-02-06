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
				<h2> Create New User </h2><br>
				<form method="post" action="process" enctype="multipart/form-data">
				@csrf
					<div class="form-group">
						<label class="font-weight-bold">Username</label>
						<input type="text" class="form-control" name="username" placeholder="Masukkan username" value="{{old('username')}}" required>
					</div>
	
					<div class="form-group">
						<label class="font-weight-bold">Password</label>
						<input type="password" class="form-control" name="password" placeholder="Masukkan password" value="{{old('password')}}" required>
					</div>
					
					<div class="form-group">
						<label class="font-weight-bold">Level</label>
						<select class="form-control" name="level" required>
							<option value="">-- Pilih Level --</option>
							<option value="Admin">Admin</option>
							<option value="Staff">Staff</option>
							<option value="Member">Member</option>
						</select>
					</div>
				
					<div class="form-group">
						<input type="submit" class="form-control btn btn-primary" id="btnA" value="Add">
					</div>
					<div class="form-group" id="cancelC">
						<a href="/user"><input type="button" class="form-control btn btn-danger" id="btnC" value="Cancel"></a>
					</div>
				</form>
			</div>
		</div>
   @endsection
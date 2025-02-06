@extends('layouts.loginGuest')
	@section('content')
			@if($message = Session::get('failed'))
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<b>{{ $message }}</b>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				</div>
			@endif
				<div class="BodyLogin">
					<div class="center">
						<h1>Change Password</h1>
						<form method="post" action="/changePassword/process">
						@csrf
							<div class="txt_field">
								<input type="password" class="form-control" name="password" value="{{old('password')}}" required>
								<span></span>
								<label>New Password</label>
							</div>
							
							<div class="txt_field">
								<input type="password" class="form-control" name="confirm"  value="{{old('confirm')}}" required>
								<span></span>
								<label>Confirm New Password</label>
							</div>
							
							<div class="txt_field" id="btom">
								<input type="submit" value="Change">
							</div>
							
							<div class="txt_field" id="btoon">
								<a href="/"><input type="button" value="Cancel"></button></a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
   @endsection
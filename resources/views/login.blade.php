@extends('layouts.loginGuest')
	@section('content')
		@if($message = Session::get('failed'))
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<b>{{ $message }} </b>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true"> &times;</span>
				</button>
			</div>
		@elseif($message = Session::get('success'))
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<b>{{ $message }} </b>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true"> &times;</span>
				</button>
			</div>
		@endif
		<div class="BodyLogin">
			<div class="center">
				<h1>Login</h1>
				<form method="post" action="/login/process">
				@csrf
					<div class="txt_field">
						<input type="text" class="form-control" name="username"
						value="<?= empty(Request::cookie('cookieUser')) ? '': Request::cookie('cookieUser'); ?>" required>
						<span></span>
						<label>Username</label>
					</div>
					
					<div class="txt_field">
						<input type="password" class="form-control" name="password"
						value="<?= empty(Request::cookie('cookiePass')) ? '': Request::cookie('cookiePass'); ?>" required>
						<span></span>
						<label>Password</label>
					</div>
						
					<div class="txt_field_2" id="cb">
						<input type="checkbox" name="remember" <?= empty(Request::cookie('cookieUser')) ? '' : 'checked'; ?>>
						<label>Remember Me</label>
					</div>
					
					<div class="txt_field" id="bton">
						<input type="submit" value="Login">
					</div>
				</form>
			</div>
		</div>
	@endsection
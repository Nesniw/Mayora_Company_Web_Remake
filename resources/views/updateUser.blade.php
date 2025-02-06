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
				<h2> Update Data User </h2><br>
				<form method="post" action="process" enctype="multipart/form-data">
				@csrf
					<div class="form-group">
						<label class="font-weight-bold">Username</label>
						<input type="text" class="form-control" name="username" value="{{ $dtuser->username }}" readonly>
					</div>
		
					<div class="form-group">
						<label class="font-weight-bold">Change Password (Optional)</label>
						<input type="password" class="form-control" name="password" placeholder="Masukkan password baru">
					</div>

					<div class="form-group">
						<label class="font-weight-bold">Level</label>
						<select class="form-control" name="level" required>
							<option value="">-- Pilih Level --</option>
							<option value="Admin" <?= ($dtuser->level == 'Admin') ? 'selected' : ''; ?>>Admin</option>
							<option value="Staff" <?= ($dtuser->level == 'Staff') ? 'selected' : ''; ?>>Staff</option>
							<option value="Member" <?= ($dtuser->level == 'Member') ? 'selected' : ''; ?>>Member</option>
						</select>
					</div>
					
					<div class="form-group">
						<input type="submit" class="form-control btn btn-primary" id="btnU" value="Update">
					</div>
					
					<div class="form-group" id="CancelU">
						<a href="/user"><input type="button" class="form-control btn btn-danger" id="btnD" value="Cancel"></a>
					</div>
				</form>
			</div>
		</div>
   @endsection
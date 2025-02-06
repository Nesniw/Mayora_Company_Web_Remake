@extends('layouts.manageAdmin')
	@section('content')
		<style>
			.table{
				text-align: center;
				margin-left: 110px;
			}
			#btn-create{
				font-family: monospace;
				transition: all 0.5s ease-in-out;
				border-radius: 40%;
				margin-left: 100px;
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
					<a href="/user/create/"><button class="btn btn-secondary mb-3" id="btn-create">
					Create New User</button></a>
				</div>
			</div><br>
			
			<div class="row">
				<table class="table table-responsive table-hover table-stripped">
					<thead>
						<tr class="table-info">
							<th width="5%">No.</th>
							<th width="15%">Username</th>
							<th width="15%">Created</th>
							<th width="15%">Updated</th>
							<th width="15%">Level</th>
							<th width="15%">Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($dtuser as $i => $u)
							<tr>
								<td>{{ ++$i }}</td>
								<td>{{ $u->username }}</td>
								<td>{{ $u->created }}</td>
								<td>{{ $u->updated }}</td>
								<td>{{ $u->level }}</td>
								<td>
									<a href="/user/update/{{ $u->username }}/">
									<button class="btn btn-success" id="btnU">Update</button></a>
									<a href="/user/delete/{{ $u->username }}">
									<button class="btn btn-danger" id="btnD">Delete</button></a>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
   @endsection
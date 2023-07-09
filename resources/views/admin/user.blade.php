@extends('layouts.master')

@section('title','User')

@section('conten')
    
		<h6 class="mb-0 text-uppercase">Management User</h6>
		<hr/>
		<div class="card">
			<div class="card-body">
				<a href="adduser" class="btn btn-primary">+Tambah User</a></br></br>
							<div class="table-responsive">
								<table id="example2" class="table table-striped table-bordered">
									<thead>
										<tr>
											<th>No</th>
											<th>Name</th>
											<th>Email</th>
											<th>Role</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
									@php($i = 1)
                					@foreach($users as $usr)
										<tr>
											<td>{{ $i++ }}</td>
											<td>{{ $usr->name }}</td>
											<td>{{ $usr->email }}</td>
											<td>{{ $usr->type }}</td>
											<td>
												<a href="/admin/{{$usr->id}}/edituser" class="btn btn-primary">Edit</a>
												<a href="/admin/deluser/<?php echo $usr->id ?>" class="btn btn-primary">Delete</a>
											</td>
										</tr>
									@endforeach  
									</tbody>
								</table>
					</div>
			</div>
		</div>

@endsection

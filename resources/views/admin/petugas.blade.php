@extends('layouts.master')

@section('title','Petugas')

@section('conten')
    
		<h6 class="mb-0 text-uppercase">Data Petugas</h6>
		<hr/>
		<div class="card">
			<div class="card-body">
				<a href="{{ url('admin/addpetugas') }}" class="btn btn-primary">+Tambah Pegawai</a><br><br>
							<div class="table-responsive">
								<table id="example2" class="table table-striped table-bordered">
									<thead>
										<tr>
											<th>Nama</th>
											<th>Alamat</th>
											<th>No Telepon</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
                					@foreach($petugas as $pet)
										<tr>
											<td>{{ $pet->nama_pegawai }}</td>
											<td>{{ $pet->no_hp }}</td>
											<td>{{ $pet->alamat }}</td>
											<td>
												<a href="/admin/{{$pet->id}}/editpetugas" class="btn btn-primary">Edit</a>
												<a href="/admin/delpetugas/<?php echo $pet->id ?>" class="btn btn-primary">Delete</a>
											</td>
										</tr>
									@endforeach  
									</tbody>
								</table>
					</div>
			</div>
		</div>

@endsection

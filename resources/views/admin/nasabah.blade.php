@extends('layouts.master')

@section('title','Nasabah')

@section('conten')
    
		<h6 class="mb-0 text-uppercase">Data Nasabah</h6>
		<hr/>
		<div class="card">
			<div class="card-body">
			<!-- <a href="{{ url('admin/addnasabah') }}" class="btn btn-primary">+Tambah Nasabah</a><br><br> -->
							<div class="table-responsive">
								<table id="example2" class="table table-striped table-bordered">
									<thead>
										<tr>
											<th>NIK</th>
											<th>Tanggal Bergabung</th>
											<th>Nama Nasabah</th>
											<th>No Handphone</th>
											<th>Alamat</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
									@foreach($nasabah as $nas)
										<tr>
											<td>{{ $nas->nik }}</td>
											<td>{{ $nas->tgl_bergabung }}</td>
											<td>{{ $nas->nama_nasabah }}</td>
											<td>{{ $nas->no_hp }}</td>
											<td>{{ $nas->alamat }}</td>
											<td>
												<a href="/admin/{{$nas->id}}/editnasabah" class="btn btn-primary">Edit</a>
												<a href="/admin/delnasabah/<?php echo $nas->id ?>" class="btn btn-primary">Delete</a>
											</td>
										</tr>
									@endforeach  
									</tbody>
								</table>
					</div>
			</div>
		</div>

@endsection

@extends('layouts.master')

@section('title','Data Bank')

@section('conten')
    
		<h6 class="mb-0 text-uppercase">Data Bank Sampah</h6>
		<hr/>
		<div class="card">
			<div class="card-body">
				<a href="{{ url('admin/addlokasi') }}" class="btn btn-primary">+Data Bank Sampah</a></br></br>
							<div class="table-responsive">
								<table id="example2" class="table table-striped table-bordered">
									<thead>
										<tr>
											<th>No</th>
											<th>Nama Bank</th>
											<th>Tanggal Bergabung</th>
											<th>Latitude</th>
											<th>Longitude</th>
											<th>Document</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
									@php($i = 1)
                					@foreach($lokasi as $lok)
										<tr>
											<td>{{ $i++ }}</td>
											<td>{{ $lok->nama_bank }}</td>
											<td>{{ $lok->tgl_bergabung }}</td>
											<td>{{ $lok->lat }}</td>
											<td>{{ $lok->long }}</td>
											<td><a href="/document/invoice/{{ $lok->path }}" target="__blank">{{ $lok->path }}</a></td>
											<td>
												<a href="/admin/{{$lok->id}}/editlokasi" class="btn btn-primary">Edit</a>
												<a href="/admin/dellokasi/<?php echo $lok->id ?>" class="btn btn-primary">Delete</a>
											</td>
										</tr>
									@endforeach  
									</tbody>
								</table>
					</div>
			</div>
		</div>

@endsection

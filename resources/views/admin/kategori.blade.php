@extends('layouts.master')

@section('title','Kategori')

@section('conten')
    
		<h6 class="mb-0 text-uppercase">Kategori Sampah</h6>
		<hr/>
		<div class="card">
			<div class="card-body">
				<a href="{{ url('admin/addkategori') }}" class="btn btn-primary">+Tambah Kategori</a></br></br>
							<div class="table-responsive">
								<table id="example2" class="table table-striped table-bordered">
									<thead>
										<tr>
											<th>No</th>
											<th>Kategori Sampah</th>
											<th>Harga Pergram</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
									@php($i = 1)
                					@foreach($kategori as $kat)
										<tr>
											<td>{{ $i++ }}</td>
											<td>{{ $kat->kategori_sampah }}</td>
											<td>{{ $kat->harga_pergram }}</td>
											<td>
												<a href="/admin/{{$kat->id}}/editkategori" class="btn btn-primary">Edit</a>
												<a href="/admin/delkategori/<?php echo $kat->id ?>" class="btn btn-primary">Delete</a>
											</td>
										</tr>
									@endforeach  
									</tbody>
								</table>
					</div>
			</div>
		</div>

@endsection

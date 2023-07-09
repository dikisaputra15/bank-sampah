@extends('layouts.master')

@section('title','Setoran')

@section('conten')
    
		<h6 class="mb-0 text-uppercase">Setoran Nasabah</h6>
		<hr/>
		<div class="card">
			<div class="card-body">
			
							<div class="table-responsive">
								<table id="example" class="table table-striped table-bordered">
									<thead>
										<tr>
											<th>NIK</th>
											<th>Nama Nasabah</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
									@foreach($nasabah as $nas)
										<tr>
											<td>{{ $nas->nik }}</td>
											<td>{{ $nas->nama_nasabah }}</td>
											<td>
												<a href="/admin/{{$nas->id}}/pilihnasabah" class="btn btn-primary">Pilih</a>
											</td>
										</tr>
									@endforeach  
									</tbody>
								</table>
					</div>
			</div>
		</div>

@endsection

@extends('layouts.master')

@section('title','Petugas')

@section('conten')
    
		<h6 class="mb-0 text-uppercase">Hasil Laporan jumlah sampah</h6>
		<hr/>
		<div class="card">
			<div class="card-body">
							<div class="table-responsive">
								<table id="example2" class="table table-striped table-bordered">
									<thead>
										<tr>
											<th>No</th>
											<th>Kategori</th>
											<th>Jumlah Sampah Pergram</th>
										</tr>
									</thead>
									<tbody>
                                    @php($i = 1)
                					@foreach($laporan as $lap)
										<tr>
                                            <td>{{ $i++ }}</td>
											<td>{{ $lap->kategori_sampah }}</td>
											<td>{{ $lap->jml_tab_pergram }}</td>
										</tr>
									@endforeach  
                                        <tr>
                                            <td>Total Sampah</td>
                                            <td></td>
                                            <td>{{ $jmlsampah }}</td>
                                        </tr>
									</tbody>
								</table>
					</div>
			</div>
		</div>

@endsection

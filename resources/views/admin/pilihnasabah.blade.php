@extends('layouts.master')

@section('title','Setoran Nasabah')

@section('conten')
    
		<h6 class="mb-0 text-uppercase">Setoran Nasabah</h6>
        <table>
            <tr>
                <td>NIK </td>
                <td>:</td>
                <td>{{ $nasabah->nik }}</td>
            </tr>
            <tr>
                <td>Nama </td>
                <td>:</td>
                <td>{{ $nasabah->nama_nasabah }}</td>
            </tr>
        </table>
		<hr/>

        <div class="card border-top border-0 border-4 border-info">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="card-title d-flex align-items-center">
										<h5>Setor Tabungan</h5>
									</div>
									<hr/>
                        <form method="POST" action="{{ url('admin/stortabungan') }}">
                        @csrf

						<div class="row mb-3" hidden>
										<label for="inputEmailAddress2" class="col-sm-3 col-form-label">User Id</label>
										<div class="col-sm-9">
											<input type="text" name="user_id" class="form-control" id="inputEmailAddress2" value="{{ $nasabah->user_id }}">
										</div>
									</div>
						
									<div class="row mb-3" hidden>
										<label for="inputEmailAddress2" class="col-sm-3 col-form-label">Nasabah Id</label>
										<div class="col-sm-9">
											<input type="text" name="nasabah_id" class="form-control" id="inputEmailAddress2" value="{{ $nasabah->id }}">
										</div>
									</div>

									<div class="row mb-3">
										<label for="inputEnterYourName" class="col-sm-3 col-form-label">Lokasi Bank</label>
										<div class="col-sm-9">
											<select class="form-control" name="lokasi">
                                                <option value="0">-Pilih lokasi-</option>
                                            @foreach($lokasi as $lok)
                                                <option value="{{ $lok->id }}">{{ $lok->nama_bank }}</option>
                                            @endforeach
                                            </select>
										</div>
									</div>

									<div class="row mb-3">
										<label for="inputEnterYourName" class="col-sm-3 col-form-label">Kategori</label>
										<div class="col-sm-9">
											<select class="form-control" name="kategori">
                                                <option value="0">-Pilih Kategori-</option>
                                            @foreach($kategori as $kat)
                                                <option value="{{ $kat->id }}">{{ $kat->kategori_sampah }}</option>
                                            @endforeach
                                            </select>
										</div>
									</div>
									<div class="row mb-3">
										<label for="inputEmailAddress2" class="col-sm-3 col-form-label">Jumlah Tabungan (pergram)</label>
										<div class="col-sm-9">
											<input type="number" name="jml_tab" class="form-control" id="inputEmailAddress2">
										</div>
									</div>

									<div class="row mb-3">
										<label for="inputEnterYourName" class="col-sm-3 col-form-label">Petugas</label>
										<div class="col-sm-9">
											<select class="form-control" name="petugas">
                                                <option value="0">-Pilih Petugas-</option>
											@foreach($petugas as $pet)
                                                <option value="{{ $pet->id }}">{{ $pet->nama_pegawai }}</option>
                                            @endforeach
                                            </select>
										</div>
									</div>
	
									<div class="row">
										<label class="col-sm-3 col-form-label"></label>
										<div class="col-sm-9">
											<button type="submit" class="btn btn-info px-5">simpan</button>
										</div>
									</div>
                        </form>
								</div><br><br>


		<div class="card">
			<div class="card-body">
							<div class="table-responsive">
                                <h5 align="center">Transaksi Kredit Nasabah</h5>
								<table id="example" class="table table-striped table-bordered">
									<thead>
										<tr>
											<th>Tanggal Menabung</th>
											<th>Kategori</th>
											<th>Harga (Pergram)</th>
											<th>Jumlah Tabungan (Pergram)</th>
											<th>Total Tabungan</th>
                                            <th>Action</th>
										</tr>
									</thead>
									<tbody>
									@foreach($setoran as $set)
										<tr>
											<td>{{ $set->tgl_menabung }}</td>
											<td>{{ $set->kategori_sampah }}</td>
											<td>{{ $set->harga_pergram }}</td>
											<td>{{ $set->jml_tab_pergram }}</td>
											<td>{{ $set->total_tabungan }}</td>
											<td>
												<a href="/admin/{{$set->id}}/editsetoran" class="btn btn-primary">Edit</a>
											</td>
										</tr>
									@endforeach  
									</tbody>
								</table>
					</div>
			</div>
		</div>

@endsection

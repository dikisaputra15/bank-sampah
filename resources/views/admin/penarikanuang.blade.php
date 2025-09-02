@extends('layouts.master')

@section('title','Penarikan Uang Nasabah')

@section('conten')

		<h6 class="mb-0 text-uppercase">Penarikan Uang Nasabah</h6>
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

		<x-alert></x-alert>
        <div class="card border-top border-0 border-4 border-info">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="card-title d-flex align-items-center">
										<h5>Penarikan Uang Nasabah</h5>
									</div>
									<hr/>
                        <form method="POST" action="{{ url('admin/tarikuang') }}">
                        @csrf

						<div class="row mb-3" hidden>
										<label for="inputEmailAddress2" class="col-sm-3 col-form-label">user id</label>
										<div class="col-sm-9">
											<input type="text" name="user_id" class="form-control" id="inputEmailAddress2" value="{{ $nasabah->user_id }}" readonly>
										</div>
									</div>

									<div class="row mb-3" hidden>
										<label for="inputEmailAddress2" class="col-sm-3 col-form-label">nasabah id</label>
										<div class="col-sm-9">
											<input type="text" name="nasabah_id" class="form-control" id="inputEmailAddress2" value="{{ $nasabah->id }}" readonly>
										</div>
									</div>

									<div class="row mb-3">
										<label for="inputEnterYourName" class="col-sm-3 col-form-label">Lokasi Bank</label>
										<div class="col-sm-9">
											<select class="form-control" name="lokasi">
                                            @foreach($lokasi as $lok)
                                                <option value="{{ $lok->id }}">{{ $lok->nama_bank }}</option>
                                            @endforeach
                                            </select>
										</div>
									</div>

						<div class="row mb-3">
							<label for="inputEmailAddress2" class="col-sm-3 col-form-label">Saldo</label>
							<div class="col-sm-9">
								<input type="text" name="saldo" class="form-control" id="inputEmailAddress2" value="<?php echo $saldo; ?>" readonly>
							</div>
						</div>

						<div class="row mb-3">
										<label for="inputEmailAddress2" class="col-sm-3 col-form-label">Jumlah Uang Yang Ditarik</label>
										<div class="col-sm-9">
											<input type="number" name="jml_tab" class="form-control" id="inputEmailAddress2">
										</div>
									</div>

									<div class="row mb-3">
										<label for="inputEnterYourName" class="col-sm-3 col-form-label">Petugas</label>
										<div class="col-sm-9">
											<select class="form-control" name="petugas">
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
                                <h5 align="center">Transaksi Debit Nasabah</h5>
								<table id="example" class="table table-striped table-bordered">
									<thead>
										<tr>
											<th>Tanggal Penarikan</th>
											<th>Kredit</th>
											<th>Debit</th>
											<th>Petugas</th>
										</tr>
									</thead>
									<tbody>
									@foreach($tarik as $tar)
										<tr>
											<td>{{ $tar->tgl_tab }}</td>
											<td>{{ $tar->kredit }}</td>
											<td>{{ $tar->debit }}</td>
											<td>{{ $tar->nama_pegawai }}</td>
										</tr>
									@endforeach
									</tbody>
								</table>
								<h5>Saldo : <?php echo $saldo; ?></h5>
					</div>
			</div>
		</div>

@endsection

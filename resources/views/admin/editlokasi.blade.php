@extends('layouts.master')

@section('title','Edit Lokasi')

@section('conten')

		<div class="row">
					<div class="col-xl-9 mx-auto">
						<h6 class="mb-0 text-uppercase">Edit Lokasi Bank</h6>
						<hr/>
						<div class="card border-top border-0 border-4 border-info">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="card-title d-flex align-items-center">
										<div><i class="bx bxs-user me-1 font-22 text-info"></i>
										</div>
										<h5 class="mb-0 text-info">Edit Lokasi Bank</h5>
									</div>
									<hr/>
                        <form method="POST" action="/admin/updatelokasi" enctype="multipart/form-data">
                        @csrf
									<div class="row mb-3" hidden>
										<label for="inputEnterYourName" class="col-sm-3 col-form-label">id lok</label>
										<div class="col-sm-9">
											<input type="text" name="id_lok" class="form-control" id="inputEnterYourName" value="{{ $lokasi->id }}">
										</div>
									</div>
									<div class="row mb-3">
										<label for="inputEnterYourName" class="col-sm-3 col-form-label">Petugas</label>
										<div class="col-sm-9">
											<select class="form-control" name="teller">
													<option value="0">-Pilih Petugas-</option>
													@foreach ($users as $usr)
													@if ($lokasi->teller_id == $usr->id)
														<option value="{{ $usr->id }}" selected>{{ $usr->name }}</option>
													@else
														<option value="{{ $usr->id }}">{{ $usr->name }}</option>
													@endif
                                    				@endforeach
											</select>
										</div>
									</div>
                                    <div class="row mb-3">
										<label for="inputEnterYourName" class="col-sm-3 col-form-label">Nama Bank</label>
										<div class="col-sm-9">
											<input type="text" name="nama_bank" class="form-control" id="inputEnterYourName" value="{{ $lokasi->nama_bank }}">
										</div>
									</div>
									<div class="row mb-3">
										<label for="inputEnterYourName" class="col-sm-3 col-form-label">Tanggal Bergabung</label>
										<div class="col-sm-9">
											<input type="date" name="tgl_bergabung" class="form-control" id="inputEnterYourName" value="{{ $lokasi->tgl_bergabung }}">
										</div>
									</div>
									<div class="row mb-3">
										<label for="inputEmailAddress2" class="col-sm-3 col-form-label">Latitude</label>
										<div class="col-sm-9">
											<input type="text" name="lat" class="form-control" id="inputEmailAddress2" value="{{ $lokasi->lat }}">
										</div>
									</div>
                                    <div class="row mb-3">
										<label for="inputEmailAddress2" class="col-sm-3 col-form-label">Longitude</label>
										<div class="col-sm-9">
											<input type="text" name="long" class="form-control" id="inputEmailAddress2" value="{{ $lokasi->long }}">
										</div>
									</div>
                                    <div class="row mb-3">
										<label for="inputEmailAddress2" class="col-sm-3 col-form-label">Dokument</label>
										<div class="col-sm-9">
											<input type="file" class="form-control" id="file" name="file" required autocomplete="file">
										</div>
									</div>
									<div class="row">
										<label class="col-sm-3 col-form-label"></label>
										<div class="col-sm-9">
											<button type="submit" class="btn btn-info px-5">simpan</button>
										</div>
									</div>
                        </form>
								</div>
							</div>
						</div>
					</div>
				</div>

@endsection

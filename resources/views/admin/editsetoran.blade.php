@extends('layouts.master')

@section('title','Edit Setoran Nasabah')

@section('conten')
    
		<h6 class="mb-0 text-uppercase">Edit Setoran Nasabah</h6>
		<hr/>

        <div class="card border-top border-0 border-4 border-info">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="card-title d-flex align-items-center">
										<h5>Edit Setor Tabungan</h5>
									</div>
									<hr/>
                        <form method="POST" action="/admin/updatesetoran">
                        @csrf

                        <div class="row mb-3" hidden>
										<label for="inputEmailAddress2" class="col-sm-3 col-form-label">id storan</label>
										<div class="col-sm-9">
											<input type="text" name="id_storan" class="form-control" id="inputEmailAddress2" value="{{ $setoran->id }}">
										</div>
									</div>

									<div class="row mb-3" hidden>
										<label for="inputEmailAddress2" class="col-sm-3 col-form-label">nasabah id</label>
										<div class="col-sm-9">
											<input type="text" name="user_id" class="form-control" id="inputEmailAddress2" value="{{ $setoran->nasabah_id }}">
										</div>
									</div>

									<div class="row mb-3">
										<label for="inputEnterYourName" class="col-sm-3 col-form-label">Lokasi Bank</label>
										<div class="col-sm-9">
											<select class="form-control" name="lokasi">
                                                <option value="0">-Pilih Lokasi Bank-</option>
                                            @foreach($lokasi as $lok)
                                                @if ($setoran->lokasi_id == $lok->id)
                                                    <option value="{{ $lok->id }}" selected>{{ $lok->nama_bank }}</option>
                                                @else
                                                    <option value="{{ $lok->id }}">{{ $lok->nama_bank }}</option>
                                                @endif
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
                                                @if ($setoran->kategori_id == $kat->id)
                                                    <option value="{{ $kat->id }}" selected>{{ $kat->kategori_sampah }}</option>
                                                @else
                                                    <option value="{{ $kat->id }}">{{ $kat->kategori_sampah }}</option>
                                                @endif
                                            @endforeach
                                            </select>
										</div>
									</div>

									<div class="row mb-3">
										<label for="inputEmailAddress2" class="col-sm-3 col-form-label">Jumlah Tabungan (pergram)</label>
										<div class="col-sm-9">
											<input type="number" name="jml_tab" class="form-control" id="inputEmailAddress2" value="{{ $setoran->jml_tab_pergram }}">
										</div>
									</div>

									<div class="row mb-3">
										<label for="inputEnterYourName" class="col-sm-3 col-form-label">Petugas</label>
										<div class="col-sm-9">
											<select class="form-control" name="petugas">
                                                <option value="0">-Pilih Petugas-</option>
                                            @foreach($petugas as $pet)
                                                @if ($setoran->kategori_id == $pet->id)
                                                    <option value="{{ $pet->id }}" selected>{{ $pet->nama_pegawai }}</option>
                                                @else
                                                    <option value="{{ $pet->id }}">{{ $pet->nama_pegawai }}</option>
                                                @endif
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
								</div>

@endsection

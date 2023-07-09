@extends('layouts.master')

@section('title','edit nasabah')

@section('conten')
    
		<div class="row">
					<div class="col-xl-9 mx-auto">
						<h6 class="mb-0 text-uppercase">Edit Nasabah</h6>
						<hr/>
						<div class="card border-top border-0 border-4 border-info">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="card-title d-flex align-items-center">
										<div><i class="bx bxs-user me-1 font-22 text-info"></i>
										</div>
										<h5 class="mb-0 text-info">Edit Nasabah</h5>
									</div>
									<hr/>
                        <form method="POST" action="/admin/updatenasabah/{{ $nasabah->id }}">
                        @method('put')
                        @csrf
									<div class="row mb-3">
										<label for="inputEnterYourName" class="col-sm-3 col-form-label">NIK</label>
										<div class="col-sm-9">
											<input type="number" name="nik" class="form-control" id="inputEnterYourName" value="{{ $nasabah->nik }}">
										</div>
									</div>
									<div class="row mb-3">
										<label for="inputChoosePassword2" class="col-sm-3 col-form-label">Tanggal Bergabung</label>
										<div class="col-sm-9">
											<input type="date" name="tgl_bergabung" class="form-control" id="inputChoosePassword2" value="{{ $nasabah->tgl_bergabung }}">
										</div>
									</div>
									<div class="row mb-3">
										<label for="inputEmailAddress2" class="col-sm-3 col-form-label">Nama Nasabah</label>
										<div class="col-sm-9">
											<input type="text" name="nama_nasabah" class="form-control" id="inputEmailAddress2" value="{{ $nasabah->nama_nasabah }}">
										</div>
									</div>
									<div class="row mb-3">
										<label for="inputChoosePassword2" class="col-sm-3 col-form-label">No Handphone</label>
										<div class="col-sm-9">
											<input type="number" name="no_hp" class="form-control" id="inputChoosePassword2" value="{{ $nasabah->no_hp }}">
										</div>
									</div>
									<div class="row mb-3">
										<label for="inputChoosePassword2" class="col-sm-3 col-form-label">Tempat Lahir</label>
										<div class="col-sm-9">
											<input type="text" name="tempat_lahir" class="form-control" id="inputChoosePassword2" value="{{ $nasabah->tempat_lahir }}">
										</div>
									</div>
									<div class="row mb-3">
										<label for="inputChoosePassword2" class="col-sm-3 col-form-label">Tanggal Lahir</label>
										<div class="col-sm-9">
											<input type="date" name="tgl_lahir" class="form-control" id="inputChoosePassword2" value="{{ $nasabah->tgl_lahir }}">
										</div>
									</div>
                                    <div class="row mb-3">
										<label for="inputChoosePassword2" class="col-sm-3 col-form-label">Alamat</label>
										<div class="col-sm-9">
											<input type="text" name="alamat" class="form-control" id="inputChoosePassword2" value="{{ $nasabah->alamat }}">
										</div>
									</div>
									
	
									<div class="row">
										<label class="col-sm-3 col-form-label"></label>
										<div class="col-sm-9">
											<button type="submit" class="btn btn-info px-5">Update</button>
										</div>
									</div>
                        </form>
								</div>
							</div>
						</div>
					</div>
				</div>

@endsection

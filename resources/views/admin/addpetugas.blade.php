@extends('layouts.master')

@section('title','Petugas')

@section('conten')
    
		<div class="row">
					<div class="col-xl-9 mx-auto">
						<h6 class="mb-0 text-uppercase">Tambah Pegawai</h6>
						<hr/>
						<div class="card border-top border-0 border-4 border-info">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="card-title d-flex align-items-center">
										<div><i class="bx bxs-user me-1 font-22 text-info"></i>
										</div>
										<h5 class="mb-0 text-info">Tambah Pegawai</h5>
									</div>
									<hr/>
                        <form method="POST" action="{{ url('admin/storepetugas') }}">
                        @csrf
									<div class="row mb-3">
										<label for="inputEnterYourName" class="col-sm-3 col-form-label">Nama Pegawai</label>
										<div class="col-sm-9">
											<input type="text" name="nama_pegawai" class="form-control" id="inputEnterYourName" placeholder="Nama Pegawai">
										</div>
									</div>
									<div class="row mb-3">
										<label for="inputEmailAddress2" class="col-sm-3 col-form-label">Tempat Lahir</label>
										<div class="col-sm-9">
											<input type="text" name="tempat_lahir" class="form-control" id="inputEmailAddress2" placeholder="Tempat Lahir">
										</div>
									</div>
									<div class="row mb-3">
										<label for="inputChoosePassword2" class="col-sm-3 col-form-label">Tanggal Lahir</label>
										<div class="col-sm-9">
											<input type="date" name="tgl_lahir" class="form-control" id="inputChoosePassword2">
										</div>
									</div>
                                    <div class="row mb-3">
										<label for="inputChoosePassword2" class="col-sm-3 col-form-label">No Hp</label>
										<div class="col-sm-9">
											<input type="number" name="no_hp" class="form-control" id="inputChoosePassword2" placeholder="No Handphone">
										</div>
									</div>
                                    <div class="row mb-3">
										<label for="inputChoosePassword2" class="col-sm-3 col-form-label">Alamat</label>
										<div class="col-sm-9">
											<input type="text" name="alamat" class="form-control" id="inputChoosePassword2" placeholder="Alamat">
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

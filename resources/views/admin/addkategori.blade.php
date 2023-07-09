@extends('layouts.master')

@section('title','Kategori')

@section('conten')
    
		<div class="row">
					<div class="col-xl-9 mx-auto">
						<h6 class="mb-0 text-uppercase">Tambah Kategori Sampah</h6>
						<hr/>
						<div class="card border-top border-0 border-4 border-info">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="card-title d-flex align-items-center">
										<div><i class="bx bxs-user me-1 font-22 text-info"></i>
										</div>
										<h5 class="mb-0 text-info">Tambah Kategori Sampah</h5>
									</div>
									<hr/>
                        <form method="POST" action="{{ url('admin/storekategori') }}">
                        @csrf
									<div class="row mb-3">
										<label for="inputEnterYourName" class="col-sm-3 col-form-label">Kategori Sampah</label>
										<div class="col-sm-9">
											<input type="text" name="kategori_sampah" class="form-control" id="inputEnterYourName" placeholder="Kategori Sampah">
										</div>
									</div>
									<div class="row mb-3">
										<label for="inputEmailAddress2" class="col-sm-3 col-form-label">Harga Pergram</label>
										<div class="col-sm-9">
											<input type="number" name="harga_pergram" class="form-control" id="inputEmailAddress2" placeholder="Harga Pergram">
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

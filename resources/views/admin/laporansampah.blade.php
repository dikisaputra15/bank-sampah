@extends('layouts.master')

@section('title','Laporan Sampah')

@section('conten')
    
		<div class="row">
					<div class="col-xl-9 mx-auto">
						<h6 class="mb-0 text-uppercase">Laporan Jumlah sampah</h6>
						<hr/>
						<div class="card border-top border-0 border-4 border-info">
							<div class="card-body">
								<div class="border p-4 rounded">
									
                        <form method="POST" action="{{ url('admin/searchlaporan') }}">
                        @csrf
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
										<label for="inputEmailAddress2" class="col-sm-3 col-form-label">Dari Tanggal</label>
										<div class="col-sm-9">
											<input type="date" name="tgl1" class="form-control" id="inputEmailAddress2">
										</div>
									</div>
                                    <div class="row mb-3">
										<label for="inputEmailAddress2" class="col-sm-3 col-form-label">Sampaidengan Tanggal</label>
										<div class="col-sm-9">
											<input type="date" name="tgl2" class="form-control" id="inputEmailAddress2">
										</div>
									</div>
									<div class="row">
										<label class="col-sm-3 col-form-label"></label>
										<div class="col-sm-9">
											<button type="submit" class="btn btn-info px-5">Search</button>
										</div>
									</div>
                        </form>
								</div>
							</div>
						</div>
					</div>
				</div>

@endsection

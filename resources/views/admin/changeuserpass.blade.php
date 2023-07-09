@extends('layouts.master')

@section('title','User')

@section('conten')
    
		<div class="row">
					<div class="col-xl-9 mx-auto">
						<h6 class="mb-0 text-uppercase">Change Password</h6>
						<hr/>
						<div class="card border-top border-0 border-4 border-info">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="card-title d-flex align-items-center">
										<div><i class="bx bxs-user me-1 font-22 text-info"></i>
										</div>
										<h5 class="mb-0 text-info">Change Password</h5>
									</div>
									<hr/>
                                    
                        <form method="POST" action="{{ url('admin/updatepass') }}">
                        @csrf
									<div class="row mb-3" hidden>
										<label for="inputEnterYourName" class="col-sm-3 col-form-label">Id</label>
										<div class="col-sm-9">
											<input type="text" name="id" class="form-control" id="inputEnterYourName" value="{{ $user->id }}" >
										</div>
									</div>
									<div class="row mb-3">
										<label for="inputEmailAddress2" class="col-sm-3 col-form-label">Old Password</label>
										<div class="col-sm-9">
											<input type="password" name="old_password" class="form-control" placeholder="Old Password" id="inputEmailAddress2">
										</div>
									</div>
                                    <div class="row mb-3">
										<label for="inputEmailAddress2" class="col-sm-3 col-form-label">New Password</label>
										<div class="col-sm-9">
											<input type="password" name="new_password" placeholder="New Password" class="form-control" id="inputEmailAddress2">
										</div>
									</div>
                                    <div class="row mb-3">
										<label for="inputEmailAddress2" class="col-sm-3 col-form-label">Confirm New Password</label>
										<div class="col-sm-9">
											<input type="password" name="new_password_confirmation" placeholder="Confirm New Password" class="form-control" id="inputEmailAddress2">
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

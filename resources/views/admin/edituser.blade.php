@extends('layouts.master')

@section('title','edit User')

@section('conten')

		<div class="row">
					<div class="col-xl-9 mx-auto">
						<h6 class="mb-0 text-uppercase">Edit User</h6>
						<hr/>
						<div class="card border-top border-0 border-4 border-info">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="card-title d-flex align-items-center">
										<div><i class="bx bxs-user me-1 font-22 text-info"></i>
										</div>
										<h5 class="mb-0 text-info">Edit User</h5>
									</div>
									<hr/>
                                    <a href="/admin/{{ $user->id }}/changeuserpass" class="btn btn-primary">Change Password</a><br><br>
                        <form method="POST" action="/admin/edituser/{{ $user->id }}">
                        @method('put')
                        @csrf
									<div class="row mb-3">
										<label for="inputEnterYourName" class="col-sm-3 col-form-label">Nama</label>
										<div class="col-sm-9">
											<input type="text" name="name" class="form-control" id="inputEnterYourName" value="{{ $user->name }}" >
										</div>
									</div>
									<div class="row mb-3">
										<label for="inputEmailAddress2" class="col-sm-3 col-form-label">Email</label>
										<div class="col-sm-9">
											<input type="email" name="email" class="form-control" id="inputEmailAddress2" value="{{ $user->email }}">
										</div>
									</div>

									<div class="row mb-3">
										<label for="inputEnterYourName" class="col-sm-3 col-form-label">Role</label>
										<div class="col-sm-9">
                                        <select class="form-control" name="type">
                                            <option value="0" @if($user->type == "Admin") selected @endif>Admin</option>
                                            <option value="1" @if($user->type == "Petugas") selected @endif>Petugas</option>
                                            <option value="2" @if($user->type == "Nasabah") selected @endif>Nasabah</option>
                                        </select>
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

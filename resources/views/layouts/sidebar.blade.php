<!--sidebar wrapper -->
<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="{{asset('template')}}/assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">Rocker</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
				</div>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li>
					<a href="{{ url('admin/dashboard') }}">
						<div class="parent-icon"><i class='bx bx-home-circle'></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
				</li>
				
				@if (auth()->user()->type == 'Admin')
				<li>
					<a href="{{ url('admin/user') }}">
						<div class="parent-icon"><i class='bx bx-user'></i>
						</div>
						<div class="menu-title">Management User</div>
					</a>
				</li>

				<li>
					<a href="{{ url('admin/nasabah') }}">
						<div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
						</div>
						<div class="menu-title">Data Nasabah</div>
					</a>
				</li>

				<li>
					<a href="{{ url('admin/petugas') }}">
						<div class="parent-icon"><i class='bx bx-message-square-edit'></i>
						</div>
						<div class="menu-title">Data Pegawai</div>
					</a>
				</li>

				<li>
					<a  href="{{ url('admin/kategori') }}">
						<div class="parent-icon"><i class="bx bx-folder"></i>
						</div>
						<div class="menu-title">Kategori Sampah</div>
					</a>
				</li>
				<li>
					<a  href="{{ url('admin/lokasi') }}">
						<div class="parent-icon"><i class="bx bx-map-alt"></i>
						</div>
						<div class="menu-title">Bank Sampah</div>
					</a>
				</li>

				<li>
					<a href="{{ url('admin/setoran') }}">
						<div class="parent-icon"><i class="bx bx-repeat"></i>
						</div>
						<div class="menu-title">Setoran</div>
					</a>
				</li>

				<li>
					<a href="{{ url('admin/penarikan') }}">
						<div class="parent-icon"> <i class="bx bx-donate-blood"></i>
						</div>
						<div class="menu-title">Penarikan</div>
					</a>
				</li>
				@endif

				@if (auth()->user()->type == 'Nasabah')
				<li>
					<a href="{{ url('admin/addnasabah') }}">
						<div class="parent-icon"><i class='bx bx-user'></i>
						</div>
						<div class="menu-title">Buka Tabungan</div>
					</a>
				</li>

				<li>
					<a href="{{ url('admin/lihattabungan') }}">
						<div class="parent-icon"><i class='bx bx-folder'></i>
						</div>
						<div class="menu-title">Lihat Tabungan</div>
					</a>
				</li>
				@endif
				
				
				@if (auth()->user()->type == 'Teller')
				<li>
					<a href="{{ url('admin/setoran') }}">
						<div class="parent-icon"><i class="bx bx-repeat"></i>
						</div>
						<div class="menu-title">Setoran</div>
					</a>
				</li>
				<li>
					<a href="{{ url('admin/penarikan') }}">
						<div class="parent-icon"> <i class="bx bx-donate-blood"></i>
						</div>
						<div class="menu-title">Penarikan</div>
					</a>
				</li>
				@endif				
				
			</ul>
			<!--end navigation-->
		</div>
		<!--end sidebar wrapper -->
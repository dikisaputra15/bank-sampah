<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{asset('template')}}/assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="{{asset('template')}}/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="{{asset('template')}}/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="{{asset('template')}}/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="{{asset('template')}}/assets/css/pace.min.css" rel="stylesheet" />
	<script src="{{asset('template')}}/assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="{{asset('template')}}/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="{{asset('template')}}/assets/css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="{{asset('template')}}/assets/css/app.css" rel="stylesheet">
	<link href="{{asset('template')}}/assets/css/icons.css" rel="stylesheet">
	<title>Bank Sampah</title>
</head>
    <body class="bg-login">
	<!--wrapper-->
	<div class="wrapper">
		<header class="login-header shadow">
			<nav class="navbar navbar-expand-lg navbar-light bg-white rounded fixed-top rounded-0 shadow-sm">
				<div class="container-fluid">
					{{-- <a class="navbar-brand" href="#">
						<img src="{{asset('template')}}/assets/images/logo-img.png" width="140" alt="" />
					</a> --}}
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent1">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        @if (Route::has('login'))
                                @auth
                                    <li class="nav-item"> <a class="nav-link active" aria-current="page" href="{{ url('/home') }}"><i class='bx bx-home-alt me-1'></i>Home</a>
							        </li>
                                @else
                                    <li class="nav-item"> <a class="nav-link" href="{{ route('login') }}"><i class='bx bx-user me-1'></i>Log in</a>
							        </li>

                                    @if (Route::has('register'))
                                        <li class="nav-item"> <a class="nav-link" href="{{ route('register') }}"><i class='bx bx-category-alt me-1'></i>Register</a>
							            </li>
                                    @endif
                                @endauth
                        @endif
                    </ul>
					</div>
				</div>
			</nav>
		</header>
		<div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-4">
			<div class="container-fluid">
                <div class="text-center">
					<h3 class="">Selamat Datang</h3>
                    <h3 class="">Sistem Infomasi Management</h3>
                    <h3>Bank Sampah</h3>
				</div>
			</div>
		</div>
		<footer class="bg-white shadow-sm border-top p-2 text-center fixed-bottom">
			<p class="mb-0">Copyright © 2023. Serang-Banten.</p>
		</footer>
	</div>
	<!--end wrapper-->
	<!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!--Password show & hide js -->
	<script>
		$(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
	</script>
	<!--app JS-->
	<script src="assets/js/app.js"></script>
</body>
</html>

<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{asset('template')}}/assets/images/favicon-32x32.png" type="image/png"/>
	<!--plugins-->
	<link href="{{asset('template')}}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
	<link href="{{asset('template')}}/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="{{asset('template')}}/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="{{asset('template')}}/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet"/>
	<!-- Datatables-->
	<link href="{{asset('template')}}/assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="{{asset('template')}}/assets/css/pace.min.css" rel="stylesheet"/>
	<script src="{{asset('template')}}/assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="{{asset('template')}}/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="{{asset('template')}}/assets/css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="{{asset('template')}}/assets/css/app.css" rel="stylesheet">
	<link href="{{asset('template')}}/assets/css/icons.css" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="{{asset('template')}}/assets/css/dark-theme.css"/>
	<link rel="stylesheet" href="{{asset('template')}}/assets/css/semi-dark.css"/>
	<link rel="stylesheet" href="{{asset('template')}}/assets/css/header-colors.css"/>

	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
     integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
     crossorigin=""/>

    <style>
        #map { height: 580px; }
    </style>
	
	<title>@yield('title')</title>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
@include('layouts.sidebar')
@include('layouts.navbar')
    <!--start page wrapper -->
	<div class="page-wrapper">
		<div class="page-content">
            @yield('conten')
        </div>
    </div>

@include('layouts.footer')
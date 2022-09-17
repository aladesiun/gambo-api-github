<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Alad Supermarket Admin</title>
    <link href="{{asset('assets/css/styles.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/admin-style.css')}}" rel="stylesheet">

    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
</head>
<body class="sb-nav-fixed">
<nav class="sb-topnav navbar navbar-expand navbar-light bg-clr">
    <a class="navbar-brand logo-brand" href="index">Alad Supermarket</a>
    <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
    <a href="https://gambolthemes.net/html-items/gambo_supermarket_demo/index" class="frnt-link"><i class="fas fa-external-link-alt"></i>Home</a>
    <ul class="navbar-nav ml-auto mr-md-0">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item admin-dropdown-item" href="edit_profile">Edit Profile</a>
                <a class="dropdown-item admin-dropdown-item" href="change_password">Change Password</a>
                <a class="dropdown-item admin-dropdown-item" href="login">Logout</a>
            </div>
        </li>
    </ul>
</nav>
@include('admin.layout.side_nav')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
{{--<script src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>--}}
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/chart/highcharts.js')}}"></script>
<script src="{{asset('assets/vendor/chart/exporting.js')}}"></script>
<script src="{{asset('assets/vendor/chart/export-data.js')}}"></script>
<script src="{{asset('assets/vendor/chart/accessibility.js')}}"></script>
<script src="{{asset('assets/js/scripts.js')}}"></script>
<script src="{{asset('assets/js/chart.js')}}"></script>
</body>
</html>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="icon" href="{{asset('asset/img/favicon.ico')}}" type="image/x-icon">
  <title>BNCC Launching</title>
  
  <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button">
          <img src="{{asset('img/menu.png')}}" alt="">
        </a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3" method="get" action="/admin">
      <div class="input-group input-group-sm">
        <input name="search" class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <img src="{{asset('img/search-3-16.png')}}" alt="">
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto"></ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{asset('img/BNCC5.png')}}" alt="BNCC Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">BNCC Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <h6>Welcome, Admin SCAC</h6>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <img src="{{asset('img/conference-16.png')}}" alt="">
              <p>
                List Member
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/downloadAll" class="nav-link">
              <img src="{{asset('img/excel-3-16.png')}}" alt="">
              <p>
                Download All Member
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/downloadKMG" class="nav-link">
              <img src="{{asset('img/excel-3-16.png')}}" alt="">
              <p>
                Download KMG Member
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/downloadALS" class="nav-link">
              <img src="{{asset('img/excel-3-16.png')}}" alt="">
              <p>
                Download ALS Member
              </p>
            </a>
          </li>
          <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">List Member BNCC</h1>
            <p>Current Member : {{$count}}</p>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!--main content-->
    <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Jenis kelamin</th>
          <th scope="col">Alamat</th>
          <th scope="col">Domisili</th>
          <th scope="col">Tempat lahir</th>
          <th scope="col">Tanggal lahir</th>
          <th scope="col">FYP Batch</th>
          <th scope="col">NIM</th>
          <th scope="col">Kampus</th>
          <th scope="col">Jurusan</th>
          <th scope="col">No Hp</th>
          <th scope="col">Line ID</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          @foreach($datas as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->gender }}</td>
                <td>{{ $data->address }}</td>
                <td>{{ $data->city }}</td>
                <td>{{ $data->place_of_birth }}</td>
                <td>{{ $data->date_of_birth }}</td>
                <td>{{ $data->fyp_batch }}</td>
                <td>{{ $data->nim }}</td>
                <td>{{ $data->campus }}</td>
                <td>{{ $data->major }}</td>
                <td>{{ $data->phone_number }}</td>
                <td>{{ $data->line_id }}</td>
            </tr>
          @endforeach
        </tr>
      </tbody>
    </table>
    </div>
    {{ $datas->withQueryString()->links() }}


<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{asset('js/adminlte.min.js')}}"></script>
</body>
</html>
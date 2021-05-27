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
          <h6>Welcome, Admin BNCC</h6>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/superadmin" class="nav-link">
              <img src="{{asset('img/conference-16.png')}}" alt="">
              <p>
                List Member
              </p>
            </a>
          </li>
          <li class="nav-item">
              <a href="/verify" class="nav-link">
                <img src="{{asset('img/conference-16.png')}}" alt="">
                <p>
                  Verify Member
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/viewMember" class="nav-link">
                <img src="{{asset('img/conference-16.png')}}" alt="">
                <p>
                  View Reregistered
                </p>
              </a>
            </li>
          <li class="nav-item">
            <a href="/schedule" class="nav-link">
              <img src="{{asset('img/calendar-7-16.png')}}" alt="">
              <p>
                View Schedule
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/add/sch" class="nav-link active">
              <img src="{{asset('img/calendar-7-16.png')}}" alt="">
              <p>
                Add Schedule
              </p>
            </a>
          </li>
          </li>
          <li class="nav-item">
            <a href="/superadmin/downloadAll" class="nav-link">
              <img src="{{asset('img/excel-3-16.png')}}" alt="">
              <p>
                Download All Member
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/superadmin/downloadKMG" class="nav-link">
              <img src="{{asset('img/excel-3-16.png')}}" alt="">
              <p>
                Download KMG Member
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/superadmin/downloadALS" class="nav-link">
              <img src="{{asset('img/excel-3-16.png')}}" alt="">
              <p>
                Download ALS Member
              </p>
            </a>
          </li>
          <li class="nav-item">
              <a href="/superadmin/downloadReg" class="nav-link">
                <img src="{{asset('img/excel-3-16.png')}}" alt="">
                <p>
                  Download REG Member
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
            <h1 class="m-0 text-dark">Add Schedule</h1>
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
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Schedule Data</div>

                <div class="card-body">
                    <form action="{{route('sch_store')}}" method="POST">
                    @csrf
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Date</label>
                            <div class="col-md-6">
                                <input type="datetime-local" class="form-control @error('date') is-invalid @enderror" name="date" value="" required>
                                @error('date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Quota</label>
                            <div class="col-md-6">
                                <input type="number" class="form-control @error('quota') is-invalid @enderror" name="quota" value="" required>
                                @error('quota')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Link</label>
                            <div class="col-md-6">
                                <input type="url" class="form-control @error('link') is-invalid @enderror" name="link" value="" required>
                                @error('link')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Link2</label>
                            <div class="col-md-6">
                                <input type="url" class="form-control @error('link2') is-invalid @enderror" name="link2" value="" required>
                                @error('link2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Create
                                </button>
                                <a class="btn btn-danger" href="/schedule">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


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
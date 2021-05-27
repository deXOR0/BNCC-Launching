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
            <a href="superadmin" class="nav-link">
              <img src="{{asset('img/conference-16.png')}}" alt="">
              <p>
                List Member
              </p>
            </a>
          </li>
          <li class="nav-item">
              <a href="verify" class="nav-link">
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
            <a href="schedule" class="nav-link active">
              <img src="{{asset('img/calendar-7-16.png')}}" alt="">
              <p>
                View Schedule
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="add/sch" class="nav-link">
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
            <h1 class="m-0 text-dark">BL Schedule</h1>
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
            <th scope="col">Tanggal BL</th>
            <th scope="col">Quota left</th>
            <th scope="col">Link</th>
            <th scope="col">Link2</th>
            <th></th>
            <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
            @foreach($schedules as $schedule)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $schedule->date }}</td>
                    <td>{{ $schedule->quota }}</td>
                    <td>{{ $schedule->link }}</td>
                    <td>{{ $schedule->link2 }}</td>
                    <td>
                    <form action="{{route('sch_edit',$schedule)}}" method="get">
                      @csrf
                      <button type="submit" class="btn btn-outline-primary btn-sm">Edit</button>
                    </form>
                    </td>
                    <td>
                    <button type="submit" data-catid="{{$schedule->id}}"class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#delete">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tr>
      </tbody>
    </table>
    </div>

    {{ $schedules->withQueryString()->links() }}

<!-- Modal -->
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Confirmation</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('sch_delete')}}" method="post">
          @csrf
          {{ method_field('DELETE') }}
          <div class="modal-body">
            <p>Are you sure to delete data?</p>
            <input type="hidden" name="category_id" id="cat_id" value="">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
            <button type="submit" class="btn btn-primary">Yes</button>
          </div>
        </form>
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
<script>
  $('#delete').on('show.bs.modal', function (event){
    var button = $(event.relatedTarget)
    var cat_id = button.data('catid')
    var modal = $(this)
    modal.find('.modal-body #cat_id').val(cat_id);
  }
  )
</script>
</body>
</html>
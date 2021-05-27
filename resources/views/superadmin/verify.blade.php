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
          <a href="/" class="nav-link">Home</a>
        </li>
      </ul>

      <!-- SEARCH FORM -->
      {{-- <form class="form-inline ml-3" method="get" action="/superadmin">
        <div class="input-group input-group-sm">
          <input name="search" class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search" value="{{$search}}">
          <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
              <img src="{{asset('img/search-3-16.png')}}" alt="">
            </button>
          </div>
        </div>
      </form> --}}

      
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto"></ul>
    </nav>
    <!-- /.navbar -->

    <div class="main-header navbar navbar-expand navbar-white navbar-light">
    <div class="btn-group ml-1">
        {{-- <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          @if(is_null($request->schedule_id))
          Schedule
          @else
          @foreach($schedules as $schedule)
          @if($schedule->id == $request->schedule_id)
          {{ $schedule->date }}
          @endif
          @endforeach
          @endif
        </button>
        <div class=" dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="{{ route('superadmin', ['search' => request('search'), 'fyp_batch' => request('fyp_batch'), 'campus' => request('campus')]) }}">All</a>
          @foreach ($schedules as $schedule)
          <a class="dropdown-item" href="{{ route('superadmin', ['search' => request('search'), 'schedule_id' => $schedule->id, 'fyp_batch' => request('fyp_batch'), 'campus' => request('campus')]) }}">{{ $schedule->date }}</a>
          @endforeach
        </div> --}}
      </div>

      <div class="btn-group ml-1">
        {{-- <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          @if(is_null($request->fyp_batch))
          FYP Batch
          @else
          {{ $request->fyp_batch }}
          @endif
        </button> --}}
        {{-- <div class=" dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="{{ route('superadmin', ['search' => request('search'), 'schedule_id' => request('schedule_id'), 'campus' => request('campus')]) }}">All</a>
          <a class="dropdown-item" href="{{ route('superadmin', ['search' => request('search'), 'schedule_id' => request('schedule_id'), 'fyp_batch' => 'ABN/AAS', 'campus' => request('campus')]) }}">ABN/AAS</a>
          <a class="dropdown-item" href="{{ route('superadmin', ['search' => request('search'), 'schedule_id' => request('schedule_id'), 'fyp_batch' => 'BBN/BAS', 'campus' => request('campus')]) }}">BBN/BAS</a>
          <a class="dropdown-item" href="{{ route('superadmin', ['search' => request('search'), 'schedule_id' => request('schedule_id'), 'fyp_batch' => 'CBN/CAS', 'campus' => request('campus')]) }}">CBN/CAS</a>
          <a class="dropdown-item" href="{{ route('superadmin', ['search' => request('search'), 'schedule_id' => request('schedule_id'), 'fyp_batch' => 'DBN/DAS', 'campus' => request('campus')]) }}">DBN/DAS</a>
          <a class="dropdown-item" href="{{ route('superadmin', ['search' => request('search'), 'schedule_id' => request('schedule_id'), 'fyp_batch' => 'Non-FYP', 'campus' => request('campus')]) }}">Non-FYP</a>
        </div> --}}
      </div>

      <div class="btn-group ml-1">
        {{-- <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          @if(is_null($request->campus))
          Campus
          @else
          {{ $request->campus }}
          @endif
        </button>
        <div class=" dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="{{ route('superadmin', ['search' => request('search'), 'schedule_id' => request('schedule_id'), 'fyp_batch' => request('fyp_batch')]) }}">All</a>
          <a class="dropdown-item" href="{{ route('superadmin', ['search' => request('search'), 'schedule_id' => request('schedule_id'), 'fyp_batch' => request('fyp_batch'), 'campus' => 'Kemanggisan']) }}">KMG</a>
          <a class="dropdown-item" href="{{ route('superadmin', ['search' => request('search'), 'schedule_id' => request('schedule_id'), 'fyp_batch' => request('fyp_batch'), 'campus' => 'AlamSutera']) }}">ALS</a>
        </div> --}}
      </div>


      {{-- <a href="{{ route('superadmin', ['search' => request('search')]) }}" class="btn-group ml-3 btn btn-secondary btn-sm" role="button">Clear All</a> --}}

    </div>

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
        <img src="{{asset('img/BNCC5.png')}}" alt="BNCC Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
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
                <a href="superadmin" class="nav-link active">
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
              <a href="schedule" class="nav-link">
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
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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
              <h1 class="m-0 text-dark">Verify Payment</h1>
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
            <th scope="col">Payment Receipt</th>
            <th scope="col">Payment Status</th>
            <th scope="col">Verify</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            @foreach($datas as $data)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $data->name }}</td>
            <td>
              @if($data->payment_status==1)
              Verified
              @else
              Not Verified
              @endif
            </td>
            <td><a href="{{asset('storage/payment_image/'.$data->payment_image)}}" target="_blank">View Payment Receipt</a></td>
            
            <td>
              <form method="POST" action="{{ route('verify', $data) }}">
                @csrf
                @if($data->payment_status==0)
                <button type="submit" class="btn btn-outline-primary btn-sm">Verify</button>
                @else
                <button type="submit" class="btn btn-outline-danger btn-sm">Reject</button>
                @endif
                </form>
            </td>
            
          </tr>
          @endforeach
          </tr>
        </tbody>
      </table>
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
        $('#delete').on('show.bs.modal', function(event) {
          var button = $(event.relatedTarget)
          var cat_id = button.data('catid')
          var modal = $(this)
          modal.find('.modal-body #cat_id').val(cat_id);
        })
      </script>
</body>

</html>
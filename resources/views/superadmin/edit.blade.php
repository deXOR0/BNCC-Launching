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
            <a href="/add/sch" class="nav-link">
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
            <h1 class="m-0 text-dark">Edit User</h1>
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
                <div class="card-header">Change User Data</div>

                <div class="card-body">
                    <form action="{{route('update',$user)}}" method="POST">
                        @csrf
                        {{method_field('PUT')}}

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$user->name}}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$user->email}}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Gender</label>
                            <div class="col-md-6">
                                <select type="text" class="form-control @error('gender') is-invalid @enderror" name="gender" required>
                                    <option selected value="{{$user->gender}}">Unchanged ({{$user->gender}})</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Address</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{$user->address}}" required>
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">place_of_birth</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('place_of_birth') is-invalid @enderror" name="place_of_birth" value="{{$user->place_of_birth}}" required>
                                @error('place_of_birth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">date_of_birth</label>
                            <div class="col-md-6">
                                <input type="date" class="form-control @error('date_of_birth') is-invalid @enderror" name="date_of_birth" value="{{$user->date_of_birth}}" required>
                                @error('date_of_birth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">City</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{$user->city}}" required>
                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">fyp_batch</label>
                            <div class="col-md-6">
                                <select type="text" class="form-control @error('fyp_batch') is-invalid @enderror" name="fyp_batch" required>
                                    <option selected value="{{$user->fyp_batch}}">Unchanged ({{$user->fyp_batch}})</option>
                                    <option value="Batch 1 (ABN/AAS)">Batch 1 (ABN/AAS)</option>
                                    <option value="Batch 2 (BBN/BAS)">Batch 2 (BBN/BAS)</option>
                                    <option value="Batch 3 (CBN/CAS)">Batch 3 (CBN/CAS)</option>
                                    <option value="Batch 4 (DBN/DAS)">Batch 4 (DBN/DAS)</option>
                                    <option value="Batch 5 (EBN/EAS)">Batch 5 (EBN/EAS)</option>
                                </select>
                                @error('fyp_batch')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">NIM</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('nim') is-invalid @enderror" name="nim" value="{{$user->nim}}" required>

                                @error('nim')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Campus</label>
                            <div class="col-md-6">
                                <select type="text" class="form-control @error('campus') is-invalid @enderror" name="campus" value="{{$user->campus}}" required>
                                    <option selected value="{{$user->campus}}">Unchanged ({{$user->campus}})</option>
                                    <option value="Kemanggisan">Kemanggisan</option>
                                    <option value="AlamSutera">Alam Sutera</option>
                                </select>
                                
                                @error('campus')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Major</label>
                            <div class="col-md-6">
                                <select class="form-control @error('major') is-invalid @enderror" id="major" name="major" value="{{$user->major}}" required>
                                    <option selected value="{{$user->major}}">Unchanged ({{$user->campus}})</option>
                                </select>
                                @error('major')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Phone Number</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{$user->phone_number}}" required>
                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Line ID</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('line_id') is-invalid @enderror" name="line_id" value="{{$user->line_id}}" required>
                                @error('line_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Schedule</label>
                            <div class="col-md-6">
                                <select type="text" class="form-control @error('schedule_id') is-invalid @enderror" name="schedule_id" value="">
                                    @if($user->schedule!=NULL)
                                    <option selected value="{{$user->schedule->id}}">Unchanged ({{$user->schedule->date}})</option>
                                    @else
                                    <option selected value="">Unchanged (NULL)</option>
                                    @endif
                                    @foreach($schedule as $sch)
                                        <option value="{{$sch->id}}">{{$sch->date}}({{$sch->quota}} slots left)</option>
                                    @endforeach
                                </select>
                                @error('schedule_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">LnT Subject</label>
                            <div class="col-md-6">
                                <select type="text" class="form-control @error('lnt_subject') is-invalid @enderror" name="lnt_subject" value="{{$user->lnt_subject}}" required>
                                    <option selected value="{{$user->lnt_subject}}">Unchanged ({{$user->lnt_subject}})</option>
                                    <option value="Java Programming">Java Programming</option>
                                    <option value="Web Programming">Web Programming</option>
                                    <option value="Web Design">Web Design</option>
                                    <option value="UI/UX">UI/UX</option>
                                    <option value="Mobile Apps">Mobile Apps</option>
                                    <option value="C Programming">C Programming</option>
                                </select>
                                @error('lnt_subject')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit Changes
                                </button>
                                <a class="btn btn-danger" href="/superadmin">Cancel</a>
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
<script src="{{asset('js/admin-edit.js')}}"></script>
</body>
</html>
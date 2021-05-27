<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset('asset/img/favicon.ico')}}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/lib/bootstrap/bootstrap.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{asset('css/userDB.css')}}" />
    <title>BNCC Launching</title>
</head>

<body>
    <section class="user-dashboard">
    <nav class="navbar base navbar-expand navbar-light">
      <a class="navbar-brand title" href="/">
        <img src="{{asset('asset/img/timer/BNCC negative.png')}}" alt="">
      </a>
      <div class="navbar-text ml-auto" id="navbarText">
        <ul class="navbar-nav content ml-auto">
          <li class="nav-item active">
            <a class="nav-link-contact ig" href="https://www.instagram.com/bnccbinus/" target="_blank">
              <img class="logo-ig" src="asset/img/timer/instagram-sketched.png" alt="">
              <h4>bnccbinus</h4>
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link-contact linkedin" href="https://www.linkedin.com/company/bina-nusantara-computer-club/" target="_blank">
              <img class="logo-linkedin" src="{{asset('asset/img/timer/Icon awesome-linkedin.svg')}}" alt="">
              <h4>Bina Nusantara Computer Club</h4>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link-contact browser" href="https://bncc.net/" target="_blank">
              <img class="logo-web" src="{{asset('asset/img/timer/Icon feather-globe.svg')}}" alt="">
              <h4>bncc.net</h4>
            </a>
          </li>
        </ul>
      </div>
    </nav>
        <div class="container userDB-wrapper">
            <h1 class="greetings">Hi, <span id="user-name">{{$user->name}}</span></h1>
            <p class="content-paragraph">
                Welcome to BNCC! Thank you for registering to be a part of BNCC Family.
                Don't forget to attend your BNCC Launching schedule on time so that you won't miss any 
                further information about our member registration.</p>
            <div class="meeting-box">
                <div class="meeting-box-content">
                    <p class="meeting-box-title mb-3">BNCC Launching Link</p>
                    <div class="meeting-box-link">
                        
                        @if($user->schedule_id != NULL)
                        <p class="meeting-box-description">
                            You can join the briefing on
                            <span class="blue">
                                {{$user->schedule->date}}
                            </span>
                            with the following link.
                        </p>
                        @else
                        <p class="meeting-box-description">
                            You can select your BNCC Launching schedule here
                            <span class="blue">
                                when
                            </span>
                            it is available.
                        </p>
                        @endif
                        <div class="meeting-link">
                            @if($user->schedule_id != NULL)
                            <a href="/timer"><p class="py-1 pl-2" style="text-align:center;">Click Here</p></a>
                            @else
                            <a href="#"><p class="py-1 pl-2" style="text-align:center;">Please choose schedule first</p></a>
                            @endif
                        </div>
                    </div>
                </div>

                @if($user->schedule_id != NULL)
                <div class="meeting-box-content pb-5">
                    <<p class="meeting-briefing-schedule">If you want to change your BNCC Launching schedule, please
                            contact our contact person. You can find it here</p>

                        <div class="row cp">
                            <div class="cp1 col-md-6">
                                <h5 class="contact-person-name">Alfita Putrimasi</h5>
                                <p class="cp-contact">
                                    <img class="img-fluid contact-img" src="asset/img/contact/line.svg" alt="" />
                                    alfitaputrimasi
                                </p>
                                <p class="cp-contact">
                                    <img class="img-fluid contact-img" src="asset/img/contact/whatsapp.svg" alt="" />
                                    081929507392
                                </p>
                            </div>
                            <div class="cp2 col-md-6">
                                <h5 class="contact-person-name" id="cp2">Atyanta Awesa</h5>
                                <p class="cp-contact">
                                    <img class="img-fluid contact-img" src="asset/img/contact/line.svg" alt="" />
                                    awesa
                                </p>
                                <p class="cp-contact">
                                    <img class="img-fluid contact-img" src="asset/img/contact/whatsapp.svg" alt="" />
                                    085772879737
                                </p>
                            </div>
                        </div>

                </div>
                @else
                    @if($user->campus == "AlamSutera")
                    <div class="meeting-box-content pb-5">
                        <p class="meeting-box-title mb-3">Select Your Schedule</p>
                        <div class="meeting-box-schedule">
                            <p class="meeting-briefing-schedule">BNCC Launching Schedule</p>

                            <form class="schedule" action="{{route('user_update_sch')}}" method="POST">
                                @csrf
                                {{method_field('PUT')}}
                                <select class="custom-select schedule py-1 pl-2" name=schedule_id>
				    <option value="" disabled selected>Please wait, our committee will get in touch with you soon.</option>
                                </select>
                                @if($errors->any())
                                    <p class="meeting-box-description">{{$errors->first()}}</p>
                                @endif
                                <button class="btn submit">
                                    <span class="btn-text">change</span>
                                </button>
                            </form>
                        </div>
                    </div>
                    @else
                    <div class="meeting-box-content pb-5">
                        <p class="meeting-box-title mb-3">Select Your Schedule</p>
                        <div class="meeting-box-schedule">
                            <p class="meeting-briefing-schedule">BNCC Launching Schedule</p>

                            <form class="schedule" action="{{route('user_update_sch')}}" method="POST">
                                @csrf
                                {{method_field('PUT')}}
                                <select class="custom-select schedule py-1 pl-2" name=schedule_id>
				                <option value="" disabled selected>Please wait, our committee will get in touch with you soon.</option>
                                </select>
                                @if($errors->any())
                                    <p class="meeting-box-description">{{$errors->first()}}</p>
                                @endif
                                <button class="btn submit">
                                    <span class="btn-text">change</span>
                                </button>
                            </form>
                        </div>
                    </div>
                    @endif
                @endif
            </div>
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="btn logout">
                    <img class="logout-icon" src="{{asset('asset/img/user dashboard/XMLID_2_.png')}}" alt="">
                    LOGOUT
                </button>
            </form>
            <img class="ring1" src="{{asset('asset/img/user dashboard/ring1_black.png')}}" alt="">
            <img class="ring2" src="{{asset('asset/img/user dashboard/ring2_Black.png')}}" alt="">
        </div>
    </section>

    <script src="{{asset('asset/lib/jquery/jquery.js')}}" type="text/javascript"></script>
    <script src="{{asset('asset/lib/bootstrap/bootstrap.js')}}" type="text/javascript"></script>
</body>

</html>
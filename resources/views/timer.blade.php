<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="{{asset('asset/img/favicon.ico')}}" type="image/x-icon">
  <link rel="stylesheet" href="{{asset('asset/lib/bootstrap/bootstrap.css')}}">
  <link rel="stylesheet" href="{{asset('css/timer.css')}}">
  <title>BNCC Launching</title>
</head>

<body>


  <section class="background">
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
    <div class="container-sm timer-wrapper">
      <div class="text-content">
        <img class="ring1" src="{{asset('asset/img/timer/ring1_black.png')}}" alt="">
        <img class="ring2" src="{{asset('asset/img/timer/ring2_Black.png')}}" alt="">
        <h1>BNCC Launching:</h1>
        <h2>Expand Your
          <span class="blue">Knowledge</span>
          , Pursue Your
          <span class="blue">Passion</span>
        </h2>
        <h3>You will be redirected automatically in</h3>
        <div class="timer">
          <div class="info">
            <div class="time">
              <p id="day"></p>
              <h5 class="days">Days</h5>
            </div>
            <h1>:</h1>
            <div class="time">
              <p id="hour"></p>
              <h5 class="hours">Hours </h5>
            </div>
            <h1>:</h1>
            <div class="time">
              <p id="minute"></p>
              <h5 class="minutes">Minutes </h5>
            </div>
            <h1>:</h1>
            <div class="time">
              <p id="second"></p>
              <h5 class="seconds">Seconds</h5>
            </div>
          </div>
        </div>
        <a href="#iframe">
          <img class="down-arrow" src="{{asset('asset/img/timer/down-arrow.png')}}" alt="">
      </div>
    </div>
    </div>
  </section>
  <div class="iframe-parent">
    <iframe class="iframe" id="iframe" src="https://filemagz.com" frameborder="0"></iframe>
  </div>
  <script src="{{asset('asset/lib/jquery/jquery.js')}}" type="text/javascript"></script>
  <script src="{{asset('asset/lib/bootstrap/bootstrap.js')}}"></script>
  <script id="schedule" date="{{ $user->schedule->date }}" src="{{asset('js/timer.js')}}"></script>
</body>

</html>
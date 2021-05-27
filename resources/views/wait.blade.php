<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/lib/bootstrap/bootstrap.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('asset/lib/slick/slick.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('asset/lib/slick/slick-theme.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('css/userDB.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/payment.css')}}" />

    <title>BNCC</title>
</head>
<body>
    <section class="payment">
        <div class="container payment-wrapper">
            <h1 class="greetings">Hi, <span id="user-name">{{$user->name}}</span></h1>
            <div class="row payment-box">
                <p class="payment-title col-md-12">Your Payment is Being Verified</p>

                <div><p class="text-center">Thank you for registering, your payment receipt is now being validated by our crew. Your payment will be validated no later than 1 x 24 hours.</p></div>
            </div>
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="btn logout">
                    <img class="logout-icon" src="{{asset('asset/img/user dashboard/XMLID_2_.png')}}" alt="">
                    LOGOUT
                </button>
            </form>
            <img class="ring1" src="{{asset('asset/img/user dashboard/ring1_black.png')}}" alt="ring1">
            <img class="ring2" src="{{asset('asset/img/user dashboard/ring2_Black.png')}}" alt="ring2">
        </div>
    </section>
    <script src="{{asset('asset/lib/jquery.js')}}" type="text/javascript"></script>
    <script src="{{asset('asset/lib/bootstrap/bootstrap.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{asset('asset/lib/slick.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}" type="text/javascript"></script>
</body>
</html>
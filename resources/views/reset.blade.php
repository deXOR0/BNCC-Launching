<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset('asset/img/favicon.ico')}}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/lib/bootstrap/bootstrap.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('asset/lib/slick/slick.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('asset/lib/slick/slick-theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}" />
    <title>BNCC Launching</title>
</head>
    
<body>

    <section class="login">
        <img class="ring1" src="{{asset('asset/img/section1/ring1_black.png')}}" alt="">
        <img class="ring2" src="{{asset('asset/img/section1/ring2_Black.png')}}" alt="">
        <div class="container wrapper">
            <a href="/"><img class="logo img-fluid rounded mx-auto d-block" src="{{asset('asset/img/section1/BNCC negative_short.png')}}"
                alt="BNCC"></a>
            <div class="box">
                <div class="box-content">
                    <h3>Reset Password</h3>

                    <form class="login-form mt-4" method="POST" action="{{url('/reset/'.$user->id)}}">
                        @csrf
                        <div class="form-group">
                            <label for="pass">Current Password</label>
                            <input type="password" name="old_password" class="form-control" required/>
                        </div>
                        
                        <div class="form-group">
                            <label for="pass">New Password</label>
                            <input type="password" name="new_password" class="form-control"required/>
                        </div>

                        @if($errors->any())
                                <p style="color:red; font-size:1rem;">{{$errors->first()}}</p>
                        @endif
                        
                        <button class="btn mt-4" type="submit">Reset</button>
                    </form>

                </div>
            </div>
        </div>
    </section>
    <script src="{{asset('asset/lib/jquery/jquery.js')}}" type="text/javascript"></script>
    <script src="{{asset('asset/lib/bootstrap/bootstrap.js')}}" type="text/javascript"></script>
</body>

</html>

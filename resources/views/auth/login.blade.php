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
                    <h3>Login</h3>

                    <form class="login-form mt-4" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="pass">Password</label>
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="pass" required autocomplete="current-password"/>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <p class="forgotpassword-link"><a href="/forgot_password">Forgot your password?</a></p>

                        <button class="btn mt-4" type="submit">Login</button>
                    </form>

                    <p class="register-link">Not registered? <a href="/register">Click here!</a></p>
                </div>
            </div>
        </div>
    </section>
    <script src="{{asset('asset/lib/jquery/jquery.js')}}" type="text/javascript"></script>
    <script src="{{asset('asset/lib/bootstrap/bootstrap.js')}}" type="text/javascript"></script>
</body>

</html>
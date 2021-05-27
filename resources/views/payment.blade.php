<!DOCTYPE html>
<html lang="en">

<head>
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
            <p class="content-paragraph">
            Welcome to BNCC! Thank you for attending BNCC Launching. 
            Don't forget to complete the re-registration procedure on 
            time so that you could be a part of BNCC Family.
            </p>
            <div class="row payment-box">
                <p class="payment-title col-md-12">Re-registration Procedure</p>

                <div class="payment-img col-md-4">
                    <img class="img-fluid" src="{{asset('asset/img/payment/money.png')}}" alt="">
                </div>
                @if($user->campus == "Kemanggisan")
                <div class="payment-procedure-content col-md-8">
                    <p class="payment-account">
                        Proceed your payment via transfer to following BCA account: <span class="bold">5271684755 (JESSIKA)</span>
                        <br>
                        *Format detail: Full Name - NIM
                    </p>
                    <ul class="payment-proof-cp">
                        Send your payment receipt to our contact person and upload it below
                        <li>Edbert - 088260267899 - LINE: bertj</li>
                        <li>Raymond - 088260267899 - LINE: raymond23018</li>
                        <li>Carissa - 081218192435 - LINE: carissa107</li>
                    </ul>
                    <form action="{{url('payment/upload')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PUT') }}
                        <p>Upload Your Payment Here :</p>
                        <div class="input-group mb-3">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="input_payment" name="payment_image" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps">
                              <label id="payment_label" class="custom-file-label" for="input_payment" aria-describedby="inputGroupUpload">Choose file</label>
                            </div>
                          </div>
                            @error('payment_image')
                                <span class="invalid-feedback mb-3" role="alert" style="display:block;">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          <input class="btn button-primary" type="submit">
                        </div>
                        
                    </form>
                </div>
                @else
                <div class="payment-procedure-content col-md-8">
                    <p class="payment-account">
                        Proceed your payment via transfer to following BCA account: <span class="bold">5271818514 (EDBERT dan JESSIKA)</span>
                        <br>
                        *Format detail: BNCCAS - NIM
                    </p>
                    <ul class="payment-proof-cp">
                        Send your payment receipt to our contact person
                        <li>Indah - LINE: indah_mursyida</li>
                        <li>Elvina - LINE: jacia14</li>
                    </ul>
                </div>
                @endif
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

    <script type="text/javascript">
        const file = document.getElementById("input_payment");
        const label = document.getElementById("payment_label");
        file.addEventListener("change",() => {
            label.innerHTML = file.value.split(`\\`)[2];
        });
    </script>
    <script src="{{asset('asset/lib/jquery.js')}}" type="text/javascript"></script>
    <script src="{{asset('asset/lib/bootstrap/bootstrap.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{asset('asset/lib/slick.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}" type="text/javascript"></script>
</body>

</html>
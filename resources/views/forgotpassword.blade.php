<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('asset/lib/bootstrap/bootstrap.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/forgot-pass.css')}}" />
    <title>BNCC Launching</title>
</head>

<body>

    <section class="trouble-login">
        <img class="ring1" src="{{asset('asset/img/section1/ring1_black.png')}}" alt="ring">
        <img class="ring2" src="{{asset('asset/img/section1/ring2_Black.png')}}" alt="ring">
        <div class="container wrapper">
            <a href="/"><img class="logo img-fluid rounded mx-auto d-block" src="{{asset('asset/img/section1/BNCC negative_short.png')}}"
                alt="BNCC"></a>
            <div class="box">
                <div class="box-content">
                    <h3>Trouble Logging In?</h3>

                    <p class="box-description">
                        If you need any help during login, feel free to contact our contact person as enlisted
                        below:
                    </p>

                    <div class="row cp">
                        <div class="cp1 col-md-6">
                            <h5 class="contact-person-name">Alfita Putrimasi</h5>
                            <p class="cp-contact">
                                <img class="img-fluid contact-img" src="{{asset('asset/img/contact/line.svg')}}" alt="" />
                                alfitaputrimasi
                            </p>
                            <p class="cp-contact">
                                <img class="img-fluid contact-img" src="{{asset('asset/img/contact/whatsapp.svg')}}" alt="" />
                                081929507392
                            </p>
                        </div>
                        <div class="cp2 col-md-6">
                            <h5 class="contact-person-name" id="cp2">Atyanta Awesa</h5>
                            <p class="cp-contact">
                                <img class="img-fluid contact-img" src="{{asset('asset/img/contact/line.svg')}}" alt="" />
                                awesa
                            </p>
                            <p class="cp-contact">
                                <img class="img-fluid contact-img" src="{{asset('asset/img/contact/whatsapp.svg')}}" alt="" />
                                085772879737
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <form action="/">
                <button class="btn return">
                    RETURN TO HOMEPAGE
                </button>
            </form>
        </div>
    </section>
    <script src="{{asset('asset/lib/jquery.js')}}" type="text/javascript"></script>
    <script src="{{asset('asset/lib/bootstrap/bootstrap.j')}}s" type="text/javascript"></script>
</body>

</html>

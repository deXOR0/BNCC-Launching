<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="{{asset('asset/img/favicon.ico')}}" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="{{asset('asset/lib/bootstrap/bootstrap.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('css/regis.css')}}" />
  <title>BNCC Launching</title>
  <!-- Facebook Pixel Code -->
  <script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '215437793241618');
  fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=215437793241618&ev=PageView&noscript=1"/>
  </noscript>
  <!-- End Facebook Pixel Code -->
</head>

<body>
  <section class="register">
    <img class="ring1" src="{{asset('asset/img/section1/ring1_black.png')}}" alt="">
    <img class="ring2" src="{{asset('asset/img/section1/ring2_Black.png')}}" alt="">
    <div class="container wrapper">
      <a href="/"><img class="logo img-fluid rounded mx-auto d-block" src="{{asset('asset/img/section1/BNCC negative_short.png')}}" alt="BNCC" /></a>
      <div class="box">
        <div class="box-content">
          <form id="register-form" class="regis-form" method="POST" action="{{ route('register-ig') }}">
            @csrf
            <div class="row">
              <div class="col-md-5 p-0">
                <h3 class="box-title mb-4">Tell Us About You</h3>
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}" required autocomplete="name" autofocus />
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="gender">Gender</label>
                  <select class="custom-select @error('gender') is-invalid @enderror" name="gender" required>
                    <option class="default-choice" value="" disabled selected>-- Select your gender --</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                    @error('gender')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="NIM">Binusian ID (NIM)</label>
                  <input type="text" name="nim" class="form-control @error('nim') is-invalid @enderror" id="NIM" onchange="checkNIM()" required />
                  <span id="NIM-message"></span>
                    @error('nim')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="Region">Campus Location</label>
                  <select name="campus" id="campus-select" class="custom-select @error('campus') is-invalid @enderror" onchange="setRequired()"
                    required>
                    <option class="default-choice" value="" disabled selected>-- Select your campus --</option>
                    <option value="Kemanggisan">Kemanggisan</option>
                    <option value="AlamSutera">Alam Sutera</option>
                  </select>
                    @error('campus')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="Region">Major</label>
                  <select class="custom-select @error('major') is-invalid @enderror" id="major" name="major" required>
                    <option class="default-choice" value="" disabled selected>-- Select your major --</option>
                  </select>
                    @error('major')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="address">Address</label>
                  <input type="text" name="address" value="{{ old('address') }}" class="form-control @error('address') is-invalid @enderror" id="address" required />
                    @error('address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="place_of_birth">Place of Birth</label>
                  <input type="text" name="place_of_birth" value="{{ old('place_of_birth') }}" class="form-control @error('place_of_birth') is-invalid @enderror" id="place_of_birth" required />
                    @error('place_of_birth')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="dob">Date of Birth</label>
                  <input type="date" name="date_of_birth" value="{{ old('date_of_birth') }}" class="form-control @error('date_of_birth') is-invalid @enderror" id="dob" required />
                    @error('date_of_birth')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="phone-number">Phone Number</label>
                  <input type="tel" name="phone_number" value="{{ old('phone_number') }}" class="form-control @error('phone_number') is-invalid @enderror"
                    id="phone-number" placeholder="Ex : 08XXXXXXXXXX" onchange="validatePhone()" required />
                  <span id="phone-message"></span>
                    @error('phone_number')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
              </div>

              <div class="col-md-2 vertical"></div>

              <div class="col-md-5 ml-auto">

                <div class="row">
                  
                  <div class="form-group">
                    <label for="domicileCity">Domicile City</label>
                    <input type="text" name="city" placeholder="Ex : Jakarta" value="{{ old('city') }}" class="form-control @error('city') is-invalid @enderror" id="domicileCity" required />
                      @error('city')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label for="fyp">FYP Batch</label>
                    <select class="custom-select @error('fyp_batch') is-invalid @enderror" id="fyp" name="fyp_batch" required>
                    <option class="default-choice" value="" disabled selected>-- Enter your Binusian ID first--</option>
                    </select>
                    @error('fyp_batch')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="lineID">LINE ID</label>
                    <input type="text" name="line_id" value="{{ old('line_id') }}" class="form-control @error('line_id') is-invalid @enderror" id="lineID" required />
                    @error('line_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>

                <div class="row">
                  <h3 class="box-title mx-auto mb-4">Your Preferences</h3>
                  <div class="form-group">
                    <label for="Region">BNCC Launching Schedule</label>
                    <select name="schedule_id" id="brief-schedule" class="custom-select @error('isQuotaNotZero') is-invalid @enderror" required> 
                      <option class="default-choice" value="" disabled selected>-- Select your campus first--</option>
                    </select>
                    @error('isQuotaNotZero')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="mb-3 form-group">
                    <label for="Region">Choose a Course</label>
                    <select name="lnt_subject" id="course" class="custom-select @error('lnt_subject') is-invalid @enderror" required>
                      <option class="default-choice" value="" disabled selected>-- Select your campus first--</option>
                    </select>
                    @error('lnt_subject')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>

                <div class="row">
                  <h3 class="box-title mt-4 mb-4 mx-auto">Set Up Your Account</h3>
                  <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" id="email" onchange="validateEmail(this)"
                      required />
                    <span id="email-message"></span>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="pass">Password</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="pass" onchange="validatePassword()"
                      required autocomplete="new-password"/>
                    <span id="pass-message"></span>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="confirm-pass">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control" id="confirm-pass"
                      onchange="confirmPassword()" required autocomplete="new-password"/>
                    <span id="confirmPass-message"></span>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <button class="btn mt-3 mx-auto" type="submit">
                Register
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <script type="text/javascript">
    var schedule = {!! json_encode($schedule) !!};
  </script>
  <script src="{{asset('asset/lib/jquery/jquery.js')}}" type="text/javascript"></script>
  <script src="{{asset('asset/lib/bootstrap/bootstrap.js')}}" type="text/javascript"></script>
  <script src="{{asset('js/regis.js')}}" type="text/javascript"></script>
</body>

</html>
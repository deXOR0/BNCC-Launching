<!DOCTYPE html>
<html lang="en">

<head>
  <title>BNCC Launching - Join Us Now</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="theme-color" content="#080808">
  <meta name="title" content="BNCC Launching - Join Us Now">
  <meta name="description" content="Are you a Binusian who is interested in tech? Join us at BNCC Launching where you can know more about BNCC and join us to be a part of our BNCC family.">
  <meta name="keywords" content="binusian, ukm binus">
  <meta name="robots" content="all">
  <link rel="icon" href="{{asset('asset/img/favicon.ico')}}" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="{{asset('asset/lib/bootstrap/bootstrap.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('asset/lib/slick/slick.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('asset/lib/slick/slick-theme.css')}}" />

  <link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}" />
  <title>BNCC Launching</title>
</head>

<body>
  <section class="landing-page" id="home">
    <img class="landing-ring1" src="{{asset('asset/img/general/ring1.png')}}" alt="" />
    <div class="landing-page-wrapper">
      <nav id="navbar" class="navbar navbar-expand-lg">
        <a class="navbar-brand navbar-logo" href="#">
          <img class="img-fluid" src="{{asset('asset/img/section1/BNCC negative_short.png')}}" width="100" height="100"
            alt="BNCC logo" loading="lazy" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <div class="hamburger"></div>
          <div class="hamburger"></div>
          <div class="hamburger"></div>
        </button>
        <div class="collapse navbar-collapse my-2 ml-2" id="navbarNav">
          <ul class="nav navbar-nav pt-1">
            <li class="nav-item">
              <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#classes">Classes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#event">Events</a>
            </li>
	    <li class="nav-item">
              <a class="nav-link" href="#faq">FAQ</a>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right ml-auto">
            @auth
            <li class="nav-item-regis">
              <a class="nav-link round-btn" href="/home">Dashboard</a>
            </li>
            @else
            <li class="nav-item-regis">
              <a class="nav-link round-btn" href="/register">Register</a>
            </li>
            <li class="nav-item pt-1 nav-item-login">
              <a class="nav-link" href="/login">Login</a>
            </li>
            @endauth
          </ul>
        </div>
      </nav>
      <div class="landing-page-content-wrapper">
        <div class="container BNCC-logo">
          <img class="img-fluid logo-BNCC" src="{{asset('asset/img/section1/BNCC negative.png')}}" alt="logo BNCC" />
          <p class="landing-page-text mx-auto">
            An organization of excellent youth in continuous development of
            technology innovation, products, and services for the people
          </p>
          <div class="regis-button">
            <button class="btn"><a href="/register" >Register</a></button>
          </div>
          <div class="gojek">
            <img class="gojek-img" src="{{asset('asset/img/section1/New GOJEK PUTIH.png')}}" alt="gojek official learning" />
            <h1 class="gojek-learning-partner">OFFICIAL LEARNING PARTNER</h1>
          </div>
          <a href="#about">
            <img class="down-arrow mt-4" src="{{asset('asset/img/section1/down-arrow.png')}}" alt="" />
          </a>
        </div>
      </div>
    </div>
    <img class="landing-ring2" src="{{asset('asset/img/general/ring2.png')}}" alt="" />
  </section>
  <div class="background-dark">
    <img class="img-fluid backdrop" src="{{asset('asset/img/section1/Wave-cut.png')}}" alt="Wave-cut" />
  </div>
  <section class="about" id="about">
    
    <img src="{{asset('asset/img/section2/Square dot.png')}}" class="img-fluid float-left dot dot-left" alt="square-dot" />
    <img src="{{asset('asset/img/section2/Rectangle dot.png')}}" class="img-fluid float-right dot dot-right" alt="rectangle-dot" />
    <div class="container about-wrapper">
      <h1 class="about-title mb-5">About BNCC</h1>
      <div class="row about-content d-flex">
        <div class="col-md-7">
          <p class="content-paragraph">
            BNCC (Bina Nusantara Computer Club) is one of the best computer-based organization in BINUS University.
          </p>
          <br />
          <p class="content-paragraph">
            Fun facts about BNCC:
            <ul class="fun-fact">
              <li>BNCC was established in 1989. Did you know that&apos;s the same year when the World Wide Web (www) was
                born? Cool right! BNCC has now reached its 31st year!</li>
              <li>BNCC has succeeded to do partnerships with big technology companies, such as Gojek, Tiket.com, Shopee,
                and many more. Don&apos;t you think it&apos;s amazing?</li>
              <li>BNCC educate people with relevant technology and organizational knowledge, developing technology
                products which are online magazine, software house, and do research in technology.</li>
            </ul>
          </p>
          <br />
        </div>
        <div class="col-md-5 mb-5">
            <img class="img-fluid" src="{{asset('asset/img/Event Section/Image 2.png')}}" alt="bncc member" />
        </div>
      </div>
      <p class="content-paragraph">
        Join our family to create your path to success and be the generation that will always thrive for innovation!
      </p>
    </div>
  </section>

  <section class="why" id="why">
    <img class="img-fluid float-right img-splatter" src="{{asset('asset/img/section3/Splatter 2.png')}}" alt="" />
    <div class="container why-wrapper">
      <h1 class="why-title">Why Should You Join?</h1>

      <div class="why-content row">
        <div class="box">
            <img class="box-img" src="{{asset('asset/img/section3/Organization chart.png')}}" alt="organization experience" />
          <p class="box-content">
            Organization Experience and Soft SKills
          </p>
        </div>
        <div class="box">
          <img class="box-img box-size-fix-1" src="{{asset('asset/img/section3/Icon awesome-code.png')}}" alt="skill" />
          <p class="box-content">
            Hard Skills
          </p>
        </div>
        <div class="box">
          <img class="box-img box-size-fix-2" src="{{asset('asset/img/section3/Icon material-stars.png')}}" alt="sat" />
          <p class="box-content">
            SAT Points
          </p>
        </div>
        <div class="box">
          <img class="box-img" src="{{asset('asset/img/section3/Networking.png')}}" alt="networking" />
          <p class="box-content">
            Networking Opportunities
          </p>
        </div>
        <div class="box">
          <img class="box-img box-size-fix-3" src="{{asset('asset/img/section3/Icon ionic-md-chatboxes.png')}}" alt="tech industry insight" />
          <p class="box-content">
            Tech Industry Insights
          </p>
        </div>
        <div class="box">
          <img class="box-img box-size-fix-3" src="{{asset('asset/img/section3/Icon awesome-gift.png')}}" alt="benefit" />
          <p class="box-content">
            Many Other Benefits
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="classes" id="classes">
    <img class="dot-left float-left" src="{{asset('asset/img/section2/Square dot.png')}}" alt="" />
    <img class="dot-right float-right" src="{{asset('asset/img/section2/Rectangle dot.png')}}" alt="" />
    <div class="container classes-wrapper">
      <div class="row d-flex">
        <div class="col-md-7">
          <h1 class="classes-title">Our Classes</h1>
          <p class="content-paragraph">
            BNCC provides 6 types of Learning and Training classes for members with topics that are related to today&apos;s
            technology industry.
          </p>
        </div>

        <div class="col-md-5">
          <img class="logo-LnT img-fluid" src="{{asset('asset/img/section4/lnt(1).png')}}" alt="LnT BNCC" />
        </div>
      </div>

      <div class="carousel">
        <div class="carousel-content">
          <h5 class="carousel-content-title">Java Programming</h5>
          <img src="{{asset('asset/img/section4/java w.png')}}" class="carousel-img" alt="java-programming" />
          <div class="carousel-content-body">
            <p class="content-text">
              One of the most used programming languages today is Java. We often see applications of Java programming in
              calculators, cash registers, ATM machines, and many more. Believe it or not, you could create those Java
              apps! If you are interested to learn Java language, you could join our Java Programming class!
            </p>
            <div class="parent-felisha">
              <div class="req-felisha">
                  Alam Sutera
                </div>
              <div class="req-felisha">
                Kemanggisan
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-content">
          <h5 class="carousel-content-title">Mobile Application</h5>
          <img src="{{asset('asset/img/section4/social-media w.png')}}" class="carousel-img" alt="mobile programming" />
          <div class="carousel-content-body">
            <p class="content-text">
              In this modern era, who doesn&apos;t use a smartphone? When using a smartphone, there will be lots of
              application that we could install. But how do people make mobile applications? Join our Mobile Application
              class and create your own cool apps for Android smartphones!
            </p>
            <div class="req-felisha">
              Kemanggisan
              </div>
          </div>
        </div>
        <div class="carousel-content">
          <h5 class="carousel-content-title">Web Programming</h5>
          <img src="{{asset('asset/img/section4/web w.png')}}" class="carousel-img" alt="web programming" />
          <div class="carousel-content-body">
            <p class="content-text" id="web-prog">
              When we use websites, all we can see is the interface. But,
              what happens behind the screen? All data on the website will be kept and processed in
              there. If you are interested to learn how to develop and process data on website or
              even if you are interested to become a back-end developer, then don&apos;t hesitate to join our Web Programming
              class!
            </p>
            <div class="req-felisha">
                Kemanggisan
              </div>
          </div>
        </div>
        <div class="carousel-content">
          <h5 class="carousel-content-title">UI/UX</h5>
          <img src="{{asset('asset/img/section4/ui w.png')}}" class="carousel-img" alt="ui ux design" />
          <div class="carousel-content-body">
            <p class="content-text">
              Interested to learn about how to design a website or mobile application? Want to know more about what
              makes an application&apos;s interface become more interesting, user-friendly, and how to create it? Then, you
              should definitely join our UI/UX Design class!
            </p>
            <div class="req-felisha">
                Kemanggisan
              </div>
          </div>
        </div>
        <div class="carousel-content">
          <h5 class="carousel-content-title">Web Design</h5>
          <img src="{{asset('asset/img/section4/web-design w.png')}}" class="carousel-img" alt="web design" />
          <div class="carousel-content-body">
            <p class="content-text">
              If you are interested in design but you also want to know how to develop and create the visual/display of
              a website, then Web Design class is the right choice for you. By following Web Design class, you will be
              able to develop a creative display of a website using HTML, CSS, and Javascript.
            </p>
            <div class="req-felisha">
                Kemanggisan
              </div>
          </div>
        </div>
        <div class="carousel-content">
          <h5 class="carousel-content-title">C Programming</h5>
          <img src="{{asset('asset/img/section4/C programming.png')}}" class="carousel-img" alt="c programming" />
          <div class="carousel-content-body">
            <p class="content-text">
            C is a powerful general purpose programming language. It can be used to develop softwares like operating systems, databases, compilers, and so on. C is a middle-level language which means, by learning C, you will understand how computers work and that will help you to learn any other modern programming languages.
            </p>
              <div class="req-felisha">
                Alam Sutera
              </div>
          </div>
        </div>
      </div>
      <div class="navigator">
        <img class="float-left arrow prev" src="{{asset('asset/img/section4/left.png')}}" alt="left-arrow" />
        <img class="float-right arrow next" src="{{asset('asset/img/section4/right.png')}}" alt="right-arrow" />
      </div>
    </div>
  </section>

  <section class="event" id="event">
    <div class="container event-wrapper">
      <img class="event-bubble1" src="{{asset('asset/img/Event Section/Little bubble.png')}}" alt="" />
      <img class="event-bubble2" src="{{asset('asset/img/Event Section/Bubble up.png')}}" alt="" />

      <div class="row">
        <div class="col-md-6 event-content-paragraph">    
          <h1 class="event-title">Our Events</h1>
          <p class="content-paragraph">
            After going through 31 year, BNCC has created and participated in a lot of events from small internal events
            to big external events. Through our events, together we expand our knowledge, try out new experiences, and
            build a sense of belonging in BNCC&apos;s family. Here are some of our recent events.
          </p>
        </div>

        <div class="col-md-6 event-content-carousel">
          <div class="event-carousel">
            <div class="event-carousel-content">
              <img class="event-img" src="{{asset('asset/img/Event Section/event6.png')}}" alt="bncc hackathon" />
              <div class="event-context">
                <p class="event-name">BNCC HACKATHON 2.0</p>
              </div>
            </div>
            <div class="event-carousel-content">
              <img class="event-img" src="{{asset('asset/img/Event Section/event3.png')}}" alt="apple academy company visit" />
              <div class="event-context">
                <p class="event-name">COMPANY VISIT APPLE ACADEMY</p>
              </div>
            </div>
            <div class="event-carousel-content">
              <img class="event-img" src="{{asset('asset/img/Event Section/event4.png')}}" alt="tokopedia company visit" />
              <div class="event-context">
                <p class="event-name">COMPANY VISIT TOKOPEDIA</p>
              </div>
            </div>
            <div class="event-carousel-content">
              <img class="event-img" src="{{asset('asset/img/Event Section/event9.png')}}" alt="techinasia pdc" />
              <div class="event-context">
                <p class="event-name">VOLUNTEER TECHINASIA PDC'19</p>
              </div>
            </div>
            <div class="event-carousel-content">
              <img class="event-img" src="{{asset('asset/img/Event Section/event5.png')}}" alt="geekcamp" />
              <div class="event-context">
                <p class="event-name">GEEKCAMP</p>
              </div>
            </div>
            <div class="event-carousel-content">
              <img class="event-img" src="{{asset('asset/img/Event Section/event8.png')}}" alt="scale up asia" />
              <div class="event-context">
                <p class="event-name">SCALE UP ASIA</p>
              </div>
            </div>
            <div class="event-carousel-content">
              <img class="event-img" src="{{asset('asset/img/Event Section/event2.png')}}" alt="bncc birthday party" />
              <div class="event-context">
                <p class="event-name">BNCC BIRTHDAY PARTY</p>
              </div>
            </div>
            <div class="event-carousel-content">
              <img class="event-img" src="{{asset('asset/img/Event Section/event1.png')}}" alt="bncc outing" />
              <div class="event-context">
                <p class="event-name">OUTING ACTIVITIES</p>
              </div>
            </div>            
	    <div class="event-carousel-content">
              <img class="event-img" src="{{asset('asset/img/Event Section/event7.png')}}" alt="new year party" />
              <div class="event-context">
                <p class="event-name">NEW YEAR PARTY</p>
              </div>
            </div>
            <div class="event-carousel-content">
              <img class="event-img" src="{{asset('asset/img/Event Section/event10.png')}}" alt="bncc alsut" />
              <div class="event-context">
                <p class="event-name">WELCOMING PARTY BNCC ALSUT</p>
              </div>
            </div>
            <div class="event-carousel-content">
              <img class="event-img" src="{{asset('asset/img/Event Section/event11.png')}}" alt="workshop android" />
              <div class="event-context">
                <p class="event-name">WORKSHOP ANDROID DEVELOPMENT</p>
              </div>
            </div>
          </div>
          <div class="event-carousel-navigator">
            <img class="float-left arrow event-prev" src="{{asset('asset/img/section4/left.png')}}" alt="" />
            <img class="float-right arrow event-next" src="{{asset('asset/img/section4/right.png')}}" alt="" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="clips" id="clips">
    <div class="container clips-wrapper">
      <h1 class="clips-title">Our Clips</h1>

      <p class="content-paragraph">
        To get to know more about what is BNCC, what we do at BNCC, what you will get from BNCC, and much more
        information, here are some documentation videos and explanations about BNCC&apos;s Activity. Check it out!
      </p>

      <div class="clips-video">
        <iframe src="https://www.youtube.com/embed/pDk94cOADQI" frameborder="0"
          allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </section>

  <section class="faq" id="faq">
    <img class="faq-dot1" src="asset/img/section8/Rectangle dot.png" alt="" />
    <img class="faq-dot2" src="asset/img/section8/Rectangle dot.png" alt="" />
    <div class="faq-wrapper container">

        <h1 class="faq-title">FAQ</h1>

        <div class="row">
            <div class="col-md-6">
                <div class="acc">
                    <h3>
                        What is BNCC?
                    </h3>
                    <div class="content">
                        <p class="content-inner">
                            BNCC is a computer-based Student Organization at Binus. At BNCC you can learn not only
                            coding,
                            but
                            also organizational knowledge, and expand your networking with people in the technology
                            field.
                        </p>
                    </div>
                </div>

                <div class="acc">
                    <h3>
                        What are the benefits of joining BNCC?
                    </h3>
                    <div class="content">
                        <p class="content-inner">
                            The benefit that you could obtain is first the hard skill from our LnT Classes. The second
                            is soft skills like public speaking, time management, and much more. Besides hard skills and
                            soft skills, you could also expand your networking with different kinds of people in the
                            technology industry.
                        </p>
                    </div>
                </div>

                <div class="acc">
                    <h3>
                        What subjects can we learn at BNCC's LnT?
                    </h3>
                    <div class="content">
                        <p class="content-inner">
                            &bull;	UI/UX: User Interface / User Experience is a material that discusses and makes designs and prototypes of website display. <br>
                            &bull;	Web Programming: Web Programming is a Web Development material that teaches you how to create the back-end of a website, such as the architecture data storage on a website. <br>
                            &bull;	Web Design: Web Design is a Web Development material that teaches about front-end programming, which is the design of a website using HTML, CSS, and JavaScript. <br>
                            &bull;	Java Programming: Java Programming is a material that discusses the fundamentals of Java starting from Java I that will further develop to connect to a database and also Java GUI. <br>
                            &bull;	Mobile Programming: Mobile Programming is a material that will teach about making a mobile application using Android Studio that implements Java as the base programming language.
                        </p>
                    </div>
                </div>
                <div class="acc">
                    <h3>
                        Can I join BNCC if I am not from the Faculty of Computer Science?
                    </h3>
                    <div class="content">
                        <p class="content-inner">
                            BNCC is a Student Organization that is open to any majors to participate in becoming a
                            member of BNCC. In BNCC, there are members that are not from
                            the Faculty of Computer Science but still part of BNCC.
			</p>
                    </div>
                </div>

                <div class="acc">
                    <h3>
                        What is BNCC Sharing Session?
                    </h3>
                    <div class="content">
                        <p class="content-inner">
                            BNCCs&apos; Sharing Session is an event where BNCC&apos;s Organization Committee will share their
                            story being part of BNCC and various tips on how to focus on college while organizing. For
                            this Specific Sharing Session, the theme will be Knowledge in Organization: Learning from
                            Experience.

                        </p>
                    </div>
                </div>

                <div class="acc">
                    <h3>
                        What Platform BNCC Sharing Session use?

                    </h3>
                    <div class="content">
                        <p class="content-inner">
                            The Platform that will be used during the BNCC Sharing Session is Microsoft Teams.

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="acc">
                    <h3>
                        How is the learning process during the Covid-19 Pandemic?

                    </h3>
                    <div class="content">
                        <p class="content-inner">
                            The Classes have been set and will be adapted to Online Learning so you could learn at home.

                        </p>
                    </div>
                </div>

                <div class="acc">
                    <h3>
                        Is LnT Class schedule the same as the lecture schedule?

                    </h3>
                    <div class="content">
                        <p class="content-inner">
                            The schedule will be adjusted so the members will not have classes that clash with the
                            lecture schedule.

                        </p>
                    </div>
                </div>

                <div class="acc">
                    <h3>
                        Is it possible for me to join other Student Organizations besides BNCC?
                    </h3>
                    <div class="content">
                        <p class="content-inner">
                            Of course, you can join other Student Organizations besides BNCC.

                        </p>
                    </div>
                </div>
                <div class="acc">
                    <h3>
                        How to register for the BNCC Sharing Session?

                    </h3>
                    <div class="content">
                        <p class="content-inner">
                            The Registration for the Sharing Session will be conducted using Google Form, where the link
                            can be obtained from the poster that is posted at BNCCs&apos; Instagram.

                        </p>
                    </div>
                </div>
                <div class="acc">
                    <h3>
                        How can I join to become a BNCC Member?

                    </h3>
                    <div class="content">
                        <p class="content-inner">
                            To join, you can register through this website.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


  <section class="sponsor" id="sponsor">
    <div class="container sponsor-wrapper">
      <h1 class="sponsor-title">
        Sponsors
      </h1>
      <img class="img-fluid sponsor-img" src="{{asset('asset/img/sponsor/Sponsor merged.png')}}" alt="" />
    </div>
  </section>

  <footer class="contact" id="contact">
    <img class="ring1-contact" src="{{asset('asset/img/general/ring1.png')}}" alt="" />
    <img class="ring2-contact" src="{{asset('asset/img/general/ring2.png')}}" alt="" />
    <div class="container contact-wrapper">
      <h1 class="contact-title text-center">Contact Us</h1>
      <div class="row contact-content">
        <div class="col-md-8 BNCC-contact">
          <h2 class="BNCC-name">Bina Nusantara Computer Club</h2>
          <a class="ctc-BNCC" href="http://line.me/ti/p/~@joy0117j" target="_blank" rel="noopener noreferrer">
            <img class="img-fluid contact-img" src="{{asset('asset/img/contact/line.svg')}}" alt="line bncc" />
            @joy0117j
          </a>
          <a class="ctc-BNCC" href="https://www.instagram.com/bnccbinus" target="_blank" rel="noopener noreferrer">
            <img class="img-fluid contact-img" src="{{asset('asset/img/contact/instagram.svg')}}" alt="instagram bncc" />
            @bnccbinus
          </a>
          <a class="ctc-BNCC" href="https://bncc.net" target="_blank" rel="noopener noreferrer">
            <img class="img-fluid contact-img" src="{{asset('asset/img/contact/Icon feather-globe.svg')}}" alt="website bncc" />
            www.bncc.net
          </a>
          <a class="ctc-BNCC" href="https://www.linkedin.com/company/bina-nusantara-computer-club/" target="_blank" rel="noopener noreferrer">
            <img class="img-fluid contact-img" src="{{asset('asset/img/contact/Icon awesome-linkedin.svg')}}" alt="linkedin bncc" />
            Bina Nusantara Computer Club
          </a>
        </div>

        <div class="col-md-4 contact-person">
          <div class="cp1">
            <h2 class="contact-person-name">Alfita Putrimasi</h2>
            <a class="cp-contact" href="http://line.me/ti/p/~alfitapultrimasi" target="_blank" rel="noopener noreferrer">
              <img class="img-fluid contact-img" src="{{asset('asset/img/contact/line.svg')}}" alt="line" />
              alfitaputrimasi
            </a>
            <a class="cp-contact" href="https://api.whatsapp.com/send?phone=6281929507392" target="_blank" rel="noopener noreferrer">
              <img class="img-fluid contact-img" src="{{asset('asset/img/contact/whatsapp.svg')}}" alt="whatsapp" />
              081929507392
            </a>
          </div>
          <div class="cp2">
            <h2 class="contact-person-name" id="cp2">Atyanta Awesa</h2>
            <a class="cp-contact" href="http://line.me/ti/p/~awesa" target="_blank" rel="noopener noreferrer">
              <img class="img-fluid contact-img" src="{{asset('asset/img/contact/line.svg')}}" alt="line" />
              awesa
            </a>
            <a class="cp-contact" href="https://api.whatsapp.com/send?phone=6285772879737" target="_blank" rel="noopener noreferrer">
              <img class="img-fluid contact-img" src="{{asset('asset/img/contact/whatsapp.svg')}}" alt="whatsapp" />
              085772879737
            </a>
          </div>
        </div>
        <div class="horizontal-break">
          <p id="copyright">
            Copyright &copy; 2020 Bina Nusantara Computer Club
          </p>
        </div>
      </div>
    </div>
  </footer>

  <script src="{{asset('asset/lib/jquery/jquery.js')}}" type="text/javascript"></script>
  <script>
    $(document).ready(function(){
    $("a").on('click', function(event) {
        if (this.hash !== "") {
        event.preventDefault();
        var hash = this.hash;
        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 800, function(){
            window.location.hash = hash;
        });
        }
    });
    });
  </script>
  <script>
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
      if (prevScrollpos > currentScrollPos) {
        document.getElementById("navbar").style.top = "0";
      } else {
        document.getElementById("navbar").style.top = "-78px";
      }
      prevScrollpos = currentScrollPos;
    }
</script>
  <script src="{{asset('asset/lib/bootstrap/bootstrap.js')}}" type="text/javascript"></script>
  <script type="text/javascript" src="{{asset('asset/lib/slick/slick.min.js')}}"></script>
  <script src="{{asset('js/main.js')}}" type="text/javascript"></script>
</body>

</html>
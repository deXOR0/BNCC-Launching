<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BNCC Lauching</title>
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap');

      @media only screen and (max-width: 1024px) {
        .BL-web-button button {
          width: 100% !important;
        }
      }

      @media only screen and (max-width: 768px) {
        #bncc-logo {
          width: 75% !important;
        }
        #edu-partner-logo {
          width: 60% !important;
        }

        .bncc-logo-content,
        .edu-partner-content,
        .section-paragraph,
        .reminder-stuff span,
        .web-link,
        #copyright {
          font-size: 0.8rem !important;
          line-height: 18px !important;
        }

        .contact-section li {
          margin-top: 0.5rem !important;
        }

        .contact-section ul {
          padding-inline-start: 1rem !important;
        }

        .contact-paragraph {
          font-size: 0.8rem !important;
          line-height: 18px !important;
          margin: 0 !important;
        }

        .contact-data {
          margin-top: 0.3rem !important;
        }
        .BL-web-button button {
          width: 100% !important;
          font-size: 0.8rem !important;
        }

        #copyright {
          text-align: left !important;
        }
      }

      @media only screen and (max-width: 425px) {
        .inner-table table {
          width: 60% !important;
        }

        .bncc-logo-content,
        .edu-partner-content,
        .section-paragraph,
        .reminder-stuff span,
        .web-link,
        #copyright {
          font-size: 0.6rem !important;
          line-height: 16px !important;
        }

        .reminder-stuff {
          font-size: 0.8rem !important;
        }

        .reminder-stuff img {
          width: 0.9rem !important;
          margin-right: 0.3rem !important;
        }

        .bncc-logo-content {
          margin: 0.8rem !important;
          margin-bottom: 0 !important;
        }

        .contact-section ul {
          /* display: flex !important;
          flex-direction: column !important; */
          margin: auto !important;
          padding-inline-start: 1rem !important;
        }
        .contact-section li {
          margin-top: 0 !important;
        }

        .contact-paragraph {
          font-size: 0.6rem !important;
          line-height: 16px !important;
          margin-top: 0 !important;
        }

        .contact-data {
          margin-top: 0 !important;
        }

        .section-title {
          font-size: 1rem !important;
        }

        .BL-section-title {
          font-size: 1.16rem !important;
        }

        .BL-web-button button {
          margin-top: 0 !important;
          font-size: 0.6rem !important;
          padding: 0.6rem 0.2rem !important;
        }
        .BL-web-button button i {
          font-size: 0.6rem !important;
          margin-left: 0 !important;
        }

        .footer-section .link img {
            width: 1.5rem !important;
        }
      }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  </head>

  <body style="margin: 0; padding: 0;">
    <table
      class="outer-table"
      cellspacing="0"
      cellpadding="0"
      border="0"
      style="width: 100%; border: none;"
    >
      <tr>
        <td class="inner-table" style="padding: 1rem 0 1rem 0; border: none;">
          <table
            align="center"
            cellspacing="0"
            cellpadding="0"
            border="0"
            bgcolor="#202020"
            style="
              width: 50%;
              border: 1px solid #cccccc;
              border-collapse: collapse;
              font-family: 'Montserrat', sans-serif !important;
              border: none;
            "
          >
            <tr class="hero-section" style="font-family: 'Montserrat', sans-serif !important;
                        ">
              <td
                align="center"
                style="background-color: #1054a5; padding: 8% 0 5% 0;"
              >
                <img
                  id="bncc-logo"
                  src="{{$message->embed(public_path().'/asset/img/BNCCnegative.png')}}"
                  alt="BNCC Logo"
                  style="display: block; width: 50%;"
                />
                <p
                  class="bncc-logo-content"
                  style="margin: 1.8rem 1.5rem 0.5rem 1.5rem; color: #ddd !important;font-family: 'Montserrat', sans-serif !important;"
                >
                  An organization of excellent youth in continuous development
                  of technology innovation, products, and services for the
                  people.
                </p>
                <img
                  id="edu-partner-logo"
                  src="{{$message->embed(public_path().'/asset/img/New GOJEK PUTIH.png')}}"
                  alt="BNCC Logo"
                  style="width: 35%;"
                />
                <p class="edu-partner-content" style="color: #ddd !important; margin: 0;font-family: 'Montserrat', sans-serif !important;">
                  OFFICIAL LEARNING PARTNER
                </p>
              </td>
            </tr>

            <tr border="0">
              <td>
                <img
                  class="wave"
                  src="{{$message->embed(public_path().'/asset/img/Wave-cut.png')}}"
                  alt="Wave-cut"
                  style="background-color: #202020; width: 100%;"
                />
              </td>
            </tr>

            <tr
              class="BL-section"
              style="background-color: #202020; color: #ddd !important;
              font-family: 'Montserrat', sans-serif !important;"
            >
              <td style="padding: 1rem 5%;">
                <p
                  class="section-title"
                  style="font-size: 1.3rem;
                        font-weight: 700;font-family: 'Montserrat', sans-serif !important;color: #ddd !important;"

                >
                  BNCC Launching Reminder
                </p>
                <p class="section-paragraph" style="line-height: 24px;font-family: 'Montserrat', sans-serif !important;color: #ddd !important;">
                  Hai {{$name}}!
                </p>
                <p class="section-paragraph" style="line-height: 24px;font-family: 'Montserrat', sans-serif !important;color: #ddd !important;">
                  Tidak terasa BNCC Launching tinggal 1 hari lagi nih. Jangan
                  sampai ketinggalan ya karena kamu akan mendapatkan lebih
                  banyak informasi baru seputar BNCC. Selain itu, akan ada
                  alumni BNCC yang telah sukses dalam dunia kerja yang akan
                  sharing pengalamannya di acara ini.
                </p>
                <p class="section-paragraph" style="line-height: 24px;font-family: 'Montserrat', sans-serif !important;color: #ddd !important;">
                  Tidak sampai di situ saja, kamu juga berkesempatan untuk
                  mendapatkan berbagai macam voucher menarik lho! Mau tahu apa
                  aja? Jangan lupa untuk hadiri acara BNCC Launching yang telah
                  kamu pilih pada:
                </p>
                <div class="reminder-stuff" style="margin-bottom: 0.5rem;">
                  <span style="font-family: 'Montserrat', sans-serif !important;color: #ddd !important;">Waktu : {{$time}} WIB</span>
                </div>
                <a
                  class="BL-web-button"
                  href="https://launching.bncc.net/meeting"
                >
                  <button
                    style="
                      border: none;
                      width: 50%;
                      margin-top: 0.5rem;
                      padding: 0.8rem 1rem;
                      background-color: #1054a5;
                      color: #ddd !important;
                      font-weight: 600 !important;
                      cursor: pointer;
                    "
                  >
                    Go To BNCC Launching Meeting
                    <i
                      class="fas fa-arrow-right"
                      style="margin-left: 0.3rem; font-size: 1rem;"
                    ></i>
                  </button>
                </a>
              </td>
            </tr>

            <tr
              class="contact-section"
              style="background-color: #202020; color: #ddd !important;
              font-family: 'Montserrat', sans-serif !important;"
            >
              <td style="padding: 0 5% 1rem 5%;">
                <p class="contact-paragraph" style="line-height: 24px;font-family: 'Montserrat', sans-serif !important;color: #ddd !important;">
                  Apabila kamu mempunyai pertanyaan, silakan hubungi:
                </p>
                <ul>
                  <li
                    class="contact-paragraph"
                    style="line-height: 24px; margin-top: 0.8rem;font-family: 'Montserrat', sans-serif !important;color: #ddd !important;"
                  >
                    Alfita Putrimasi
                    <div class="contact-data" style="margin-top: 0.3rem;font-family: 'Montserrat', sans-serif !important;color: #ddd !important;">
                      Line: alfitaputrimasi
                    </div>
                    <div class="contact-data" style="margin-top: 0.3rem;font-family: 'Montserrat', sans-serif !important;color: #ddd !important;">
                      WhatsApp: 081929507392
                    </div>
                  </li>
                  <li
                    class="contact-paragraph"
                    style="line-height: 24px; margin-top: 0.8rem;font-family: 'Montserrat', sans-serif !important;color: #ddd !important;"
                  >
                    Atyanta Awesa
                    <div class="contact-data" style="margin-top: 0.3rem;font-family: 'Montserrat', sans-serif !important;color: #ddd !important;">
                      Line: awesa
                    </div>
                    <div class="contact-data" style="margin-top: 0.3rem;font-family: 'Montserrat', sans-serif !important;color: #ddd !important;">
                      WhatsApp: 085772879737
                    </div>
                  </li>
                </ul>
              </td>
            </tr>

            <tr class="footer-section" style="background-color: #1054a5;">
              <td
                style="color: #ddd; font-size: 14px; padding: 2% 5%;"
                width="50%"
              >
                <p id="copyright" style="font-family: 'Montserrat', sans-serif !important;color: #ddd !important;">
                  Copyright © 2020 Bina Nusantara Computer Club
                </p>
                <div class="link" style="display: flex; margin-bottom: 1rem;">
                  <a href="http://line.me/ti/p/~@joy0117j/" target="_blank">
                    <img
                      src="{{$message->embed(public_path().'/asset/img/line.png')}}"
                      alt="BNCC-line"
                      style="display: block; width: 1.7rem; margin-right: 1rem;"
                    />
                  </a>
                  <a
                    href="https://www.instagram.com/bnccbinus/"
                    target="_blank"
                  >
                    <img
                      src="{{$message->embed(public_path().'/asset/img/instagram.png')}}"
                      alt="BNCC-instagram"
                      style="display: block; width: 1.7rem; margin-right: 1rem;"
                    />
                  </a>
                  <a href="https://www.bncc.net/" target="_blank">
                    <img
                      src="{{$message->embed(public_path().'/asset/img/Icon feather-globe.png')}}"
                      alt="BNCC-website"
                      style="display: block; width: 1.7rem; margin-right: 1rem;"
                    />
                  </a>
                  <a
                    href="https://www.linkedin.com/company/bina-nusantara-computer-club/"
                    target="_blank"
                  >
                    <img
                      src="{{$message->embed(public_path().'/asset/img/Icon awesome-linkedin.png')}}"
                      alt="BNCC-linkedin"
                      style="display: block; width: 1.6rem; margin-right: 1rem;"
                    />
                  </a>
                </div>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </body>

  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</html>

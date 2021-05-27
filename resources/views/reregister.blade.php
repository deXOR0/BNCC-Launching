<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="{{asset('asset/img/favicon.ico')}}" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="{{asset('asset/lib/bootstrap/bootstrap.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('css/regis.css')}}" />
  <title>BNCC Launching</title>
</head>

<body>
  <section class="register">
    <img class="ring1" src="{{asset('asset/img/section1/ring1_black.png')}}" alt="">
    <img class="ring2" src="{{asset('asset/img/section1/ring2_Black.png')}}" alt="">
    <div class="container wrapper">
      <a href="/"><img class="logo img-fluid rounded mx-auto d-block" src="{{asset('asset/img/section1/BNCC negative_short.png')}}" alt="BNCC" /></a>
      <div class="box">
        <div class="box-content">
            <h3 class="box-title mb-4">Re-registration Form</h3>
            <form action="{{url('/reregister')}}" method="post" class="regis-form">
            @csrf
                <div class="form-group">
                    <label for="pass">BNCC_ID</label>
                      <input type="text" name="bncc_id" class="form-control @error('bncc_id') is-invalid @enderror" placeholder="ex. BNCC20XXX" value="{{ old('bncc_id') }}">
                    <span id="pass-message"></span>
                    @error('bncc_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="pass">Linked URL</label>
                      <input type="text" name="linkedin_id" class="form-control @error('linkedin_id') is-invalid @enderror" placeholder="ex. https://www.linkedin.com/in/edbertjunus/" value="{{ old('linkedin_id') }}">
                    <span id="pass-message"></span>
                    @error('linkedin_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="pass">Github URL</label>
                      <input type="text" name="github_id" class="form-control @error('github_id') is-invalid @enderror" placeholder="ex. https://github.com/edbertjunus" value="{{ old('github_id') }}">
                    <span id="pass-message"></span>
                    @error('github_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3 form-group">
                    <label for="Region">Choose a Course</label>
                    <select name="lnt_subject" id="course" class="custom-select @error('lnt_subject') is-invalid @enderror" required>
                      <option class="default-choice" value="UI/UX Design">UI/UX Design</option>
                      <option class="default-choice" value="Java Programming">Java Programming</option>
                      <option class="default-choice" value="Mobile Apps">Mobile Apps</option>
                      <option class="default-choice" value="Web Design">Web Design</option>
                      <option class="default-choice" value="Web Programming">Web Programming</option>
                    </select>
                    @error('lnt_subject')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                <h6 class="text-light text-center">By submitting this form, you have agreed to our <a class="link-terms-condition" data-toggle="modal" data-target="#staticBackdrop">terms and conditions</a></h6>
                <input type="submit" class="btn mt-3 mx-auto"/>
            </form>
        </div>
        
      </div>
      
    </div>
  </section>
  <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Terms and Conditions</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Sebagai anggota sah dari Unit Kegiatan Mahasiswa (UKM) Bina Nusantara Computer Club periode 2020 – 2021, mengakui dan
            menyepakati ketentuan – ketentuan di bawah ini :</p>
          <h5><b>Hak Anggota Bina Nusantara Computer Club (BNCC)</b></h5>
<div>1.1. Mengikuti dan berpartisipasi secara aktif dalam kegiatan rutin dan non-rutin BNCC.</div>
<div>1.2. Mendapatan fasilitas sebagai anggota BNCC selama masa keanggotaan, yaitu :</div>
<div class="ml-3">1.2.1 Mengikuti satu materi Learning and Training dalam satu shift pertemuan seminggu sekali.</div>
<div class="ml-3">1.2.2 Memiliki account di member.bncc.net</div>
<div>1.3. Berkesempatan menjadi aktivis BNCC.</div>
<div>1.4. Mengeluarkan pendapat dan mengajukan usul – usul serta saran – saran secara lisan ataupun tertulis demi kemajuan BNCC.</div>
<div>1.5. Mengikuti kegiatan – kegiatan dan menggunakan fasilitas BNCC yang tersedia sesuai prosedur dan aturan yang ditetapkan
  oleh pengurus BNCC.</div>
<h5><b>Kewajiban Anggota Bina Nusantara Computer Club (BNCC)</b></h5>
<div>2.1. Mematuhi tata tertib dan peraturan BNCC yang berlaku.</div>
<div>2.2. Ikut berperan serta dalam memajukan organisasi serta menjunjung tinggi nama dan kehormatan BNCC.</div>
<div>2.3. Melaksanakan semua keputusan organisasi BNCC.</div>
<div>2.4. Mengisi informasi data pribadi secara valid dan benar.</div>
<h5><b>Informasi data pribadi yang dikumpulkan Bina Nusantara Computer Club (BNCC)</b></h5>
<div>3.1. Informasi data pribadi Anda akan dibagi kepada partner BNCC untuk keperluan sebagai berikut.</div>
<div class="ml-3">3.1.1 Untuk Pihak Ketiga yang menyediakan jasa baik untuk BNCC ataupun Anda, melaksanakan kegiatan atas
  nama BNCC atau kerja sama komersial dimana pihak ketiga dapat mendapatkan akses untuk mengenalkan atau menawarkan
  produk atau jasa kepada Anda atau melaksanakan kegiatan lain seperti pemasaran, penelitian, analisis dan pengembangan
  produk.</div>
<div>3.2. Kerahasiaan data pribadi Anda menjadi prioritas pertama kami. Kami akan menggunakan segala upaya untuk melindungi dan
  mengamankan data pribadi Anda dari pihak yang tidak mendapatkan izin, kehilangan data yang tidak disengaja, kehancuran
  atau kerusakan atau ancaman yang sama terjadi. Namun, pertukaran data melalui internet tidak sepenuhnya aman. Walaupun
  kami akan berusaha untuk menjaga informasi data pribadi Anda, Anda mengakui bahwa kita tidak bisa menjamin integritas dan
  ketepatan dari informasi data pribadi yang diberikan, serta tidak bisa memastikan informasi data pribadi anda tidak diakses,
  diubah, atau dihancurkan oleh pihak ketiga yang tidak diizinkan karena faktor diluar kontrol kami.</div>
<h5><b>Tata Tertib Anggota Bina Nusantara Computer Club (BNCC)</b></h5>
<div>4.1. Berpakaian rapi dan sopan pada setiap kegiatan BNCC.</div>
<div>4.2. Mengikuti hak dan kewajiban anggota BNCC.</div>
<div>4.3. Menggunakan flazz tag pada setiap kegiatan BNCC (Selama kegiatan offline).</div>
<div>4.4. Hak mengikuti kegiatan BNCC tak dapat diwakilkan.</div>
<div>4.5. Iuran anggota yang dibayar tidak dapat dikembalikan dengan alasan apapun.</div>
<p class="mt-2">Bersama ini saya menyatakan bahwa saya siap dan sanggup untuk mengikuti serta melaksanakan kewajiban dan tata tertib sesuai
  keputusan yang diambil oleh pengurus Bina Nusantara Computer Club (BNCC) periode 2020 – 2021.
  Demikian pernyataan ini saya buat dengan sesungguhnya tanpa adanya paksaan ataupun tekanan dari pihak manapun, apabila saya
  tidak memenuhi pernyataan yang telah saya buat maka pengurus BNCC dengan persetujuan DPI (Dewan Pengurus Inti) berhak
  memberikan sanksi berupa peringatan, larangan, maupun pemberhentian dari keanggotaan Bina Nusantara Computer Club (BNCC).</p>
<p class="text-right">Jakarta, 07 September 2020</p>
<p class="text-right">Bina Nusantara Computer Club</p>
        </div>
      </div>
    </div>
  </div>
  
  <script src="{{asset('asset/lib/jquery/jquery.js')}}" type="text/javascript"></script>
  <script src="{{asset('asset/lib/bootstrap/bootstrap.js')}}" type="text/javascript"></script>
  <script src="{{asset('js/regis.js')}}" type="text/javascript"></script>
</body>

</html>
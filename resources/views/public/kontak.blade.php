@extends('layouts.app')

@section('title', 'Kontak')

@section('content')
<main id="main">

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div>
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.2835118383477!2d112.55627611105797!3d-7.652633592331763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78770c28200469%3A0x4d3ca4c81c8e5363!2sBernah%20De%20Vallei!5e0!3m2!1sid!2sid!4v1712490080946!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <a href="https://maps.app.goo.gl/pB9kVaJQuK6oA3ck6" target="blank">
                <i class="bi bi-geo-alt"></i>
                <h4>Lokasi:</h4>
                <p>Belor, Kembangbelor, Kec. Pacet, Kab. Mojokerto, Jawa Timur 61374</p>
              </div>
            </a>
              <a href="mailto:officialbernahdevallei@gmail.com">
                <div class="email">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                <p>officialbernahdevallei@gmail.com</p>
                </div>
              </a>
              

              <a href="https://api.whatsapp.com/send/?phone=6281311448049&text&type=phone_number&app_absent=0" target="_blank">
                <div class="phone">
                  <i class="bi bi-phone"></i>
                  <h4>No Telepon:</h4>
                  <p>+62 813 1144 8049</p>
                </div>
              </a> 

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">
            <div class="section-title">
              <h3>Kritik dan saran</h3>
            </div>
            <form action="{{ route('insertData') }}" method="post" enctype="multipart/form-data" role="form" class="php-email-form">
              @csrf
              <div class="row">
                  <div class="col-md-6 form-group">
                      <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Anda" required>
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Email Anda" required>
                  </div>
              </div>
              <div class="form-group mt-3">
                  <select class="form-select" name="tujuan" id="tujuan" required>
                      <option value="">Pilih Tujuan</option>
                      <option value="kritiksaran">Kritik dan Saran</option>
                      <option value="pertanyaan">Pertanyaan</option>
                  </select>
              </div>
              <div class="form-group mt-3">
                  <textarea class="form-control" name="pesan" rows="5" placeholder="Pesan" required></textarea>
              </div>
              <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
          
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
@endsection
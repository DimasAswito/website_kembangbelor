@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<main id="main">
  <!-- ======= Landingpage ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container d-flex flex-column align-items-center" data-aos="zoom-in" data-aos-delay="100">
      <h1>Desa Kembangbelor</h1>
      <h2 class="text-center">Sebuah desa di kecamatan Pacet yang memiliki keindahan yang luar biasa dari berbagai bidang. Mulai dari fasilitas yang lengkap, penginapan dan banyak wisata yang sangat indah untuk dinikmati</h2>
      <a href="#about" class="btn-about">Jelajahi</a>
    </div>
  </section>
  <!-- End  Landingpage -->
  <section id="services" class="services">
    <div "container" data-aos="fade-up">
      <div class="section-title">
        <h2>Event</h2>
      </div>

  <div class="row justify-content-center">
      @foreach ($data as $row)
          <div class="col-md-4 mb-4">
              <div class="card mx-auto p-1" style="width: 18rem; cursor: pointer;" data-toggle="modal" data-target="#detailModal{{ $row->id }}">
                  <div class="card-body">
                    <img src="{{ $row->poster_url }}" class="card-img-top" alt="event">
                      <h5 class="card-title text-center fw-bold mt-1 ">{{ $row->title }}</h5>
                      <p class="card-text text-center fw-bold"><i class="bi bi-calendar-week pe-2"></i>  {{ $row->event_started }}</p>
                      <p class="card-text text-center fw-bold"><i class="bi bi-geo-alt pe-2"></i> {{ $row->wisata->name }}</p>
                      
                  </div>
              </div>
          </div>
  
          <!-- Modal -->
          <div class="modal fade" id="detailModal{{ $row->id }}" tabindex="-1" aria-labelledby="detailModalLabel{{ $row->id }}" aria-hidden="true">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title fw-bold" id="detailModalLabel{{ $row->id }}">{{ $row->title }}</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button> 
                      </div>
                      <div class="modal-body">
                          <img src="{{ $row->poster_url }}" class="img-fluid mb-3" alt="event">
                          <p>{{ $row->description }}</p>
                          <p class="fw-bold">Tanggal Mulai: {{ $row->event_started }}</p>
                      </div>
                      
                  </div>
              </div>
          </div>
      @endforeach      
  </div>
  
  <!-- Add Bootstrap JS and dependencies before the closing </body> tag if not already included -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  


    </div>
      <!-- ======= About Section ======= -->
      <section id="about" class="about">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Selamat Datang Di kembangbelor</h2>
          </div>
          <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <div style="position: relative; padding-bottom: 45%; /* 3:4 aspect ratio */ height: 0; overflow: hidden; border-radius: 10px;">
                    <iframe src="https://www.youtube.com/embed/7YCwQmwOevM?si=BQuUkOzHd0mf7TyJ" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" title="YouTube video player" allowfullscreen></iframe>
                </div>
            </div>
          </div>
        </div>
      </section><!-- End About Section -->

      <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Layanan</h2>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-pink">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                </svg>
                <i class="bi bi-tree"></i>
              </div>
              <h4><a href="">Tempat Wisata</a></h4>
              <p>Desa Kembangbelor merupakan salah satu yang terletak di Kecamatan Pacet, Kota Mojokerto, Jawa Timur, Indonesia. Desa ini memiliki tempat wisata menarik seperti Bernah De Vallei dan Klurak Eco Park.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-blue">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                </svg>
                <i class="bi bi-snow"></i>
              </div>
              <h4><a href="">Sejuk</a></h4>
              <p>Dikelilingi oleh udara sejuk dan hijaunya pepohonan, Desa Kembangbelor menjadi tempat yang sempurna bagi para pencinta alam yang mencari ketenangan dan keindahan alam yang autentik.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-orange">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
                </svg>
                <i class="bi bi-fire"></i>
              </div>
              <h4><a href="">Camping Ground</a></h4>
              <p>Camping ground di  Wisata Desa Kembangbelor dilengkapi dengan fasilitas yang memadai untuk kenyamanan para pengunjung, seperti tempat berkemah yang luas, area api unggun, dan fasilitas toilet.</p>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= wisata Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">
  
          <div class="section-title">
              <h2>Tempat Wisata</h2>
          </div>
          <div class="col-md-12 mb-4 d-flex justify-content-end">
              <a href="/wisata" class="lihat-selengkapnya-link">Lihat Selengkapnya</a>
          </div>
  
          <div class="row">
              @foreach ($wisata as $row)
              <div class="col-md-4 mb-4">
                <a href="{{ route('show_detail_wisata', $row->id_wisata) }}">
                      <div class="card wisata-card">
                          <img src="{{ $row->image_url }}" class="card-img-top wisata-img-top" alt="Image">
                          <div class="card-body">
                              <h5 class="card-title">{{ $row->name }}</h5>
                              <p class="card-text">{{ Illuminate\Support\Str::limit($row->desc, $limit = 110, $end = '...') }}</p>
                          </div>
                      </div>
                  </a>
              </div>
              @endforeach
          </div>
  
      </div>
  </section>
  
        <!-- End  wisata section -->

            <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Review pengunjung</h2>
        </div>
        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/user1.png" class="testimonial-img" alt="">
                <h3>Dimas Aswito</h3>
                <h4>Explorer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Awal saya mengunjungi desa kembang belor hawanya sangat sejuk
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/user3.png" class="testimonial-img" alt="">
                <h3>Muhammad Miftachul</h3>
                <h4>Pengujung Klurak Eco Park</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Tempat yang asyik untuk berkemah (camping). Biaya relatif murah. Disediakan peralatan camping, juga persewaan rumah gubug. Baik yg di lereng ataupun yg di tepi sungai. Ada toilet gratis, musholla, juga kantin atau kafe di tengah hutan bumi perkemahan.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/user5.png" class="testimonial-img" alt="">
                <h3>Ikka Darmawan</h3>
                <h4>Pengunjung Bernah De Vallei</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  View pemandangannya Bagus,Alami.Spot fotonya juga bagus,Kolam renangnya Bersih,Pelayanannya ramah dan memuaskan.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/user4.png" class="testimonial-img" alt="">
                <h3>Bang ivann</h3>
                <h4>Pengunjung Bernah De Vallei</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i> 
                  Masya ALLAH...Tempat wisata untuk kluarga yang nyaman , sejuk dan indah lokasinya ...keren luurr....Air kolame suegeerr...Suasananya sejuukk... recommended banget buat wisata kluarga...kantinnya ok...mantab..kopinya apalagi nii...        😍😍👍👍👍👍
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/user2.png" class="testimonial-img" alt="">
                <h3>Sari Purtri</h3>
                <h4>Pengujung Klurak Eco Park</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Nyaman sejuk dan terawat banget tempatnya. Cocok untuk me time bareng kluarga tercinta tersedia kolam renang anak yang aman, untuk harga masuk juga ekonomis banget. View juga bagus apa lagi dekat sungai. Yang mau paket lengkap buat campaign ada say.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->


          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

</main><!-- End #main -->
@endsection
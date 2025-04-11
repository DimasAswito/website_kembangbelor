@extends('layouts.app')

@section('title', 'Galeri')

@section('content')
<main id="main">

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Galeri</h2>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Semua</li>
              @php
                  $uniqueParentTourisms = $galeri->unique('wisataName');
              @endphp
              @foreach ($uniqueParentTourisms as $row)
                  <li data-filter=".filter-{{ $row->wisataName }}">{{ $row->wisata->name }}</li>
              @endforeach

          </ul>
          
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          @foreach ($galeri as $row)
              <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $row->wisataName }}">
                  <div class="portfolio-wrap">
                      <img src="{{ $row->photo_url }}" class="img-fluid" alt="{{ $row->caption }}">
                      <div class="portfolio-info">
                          <h4>{{ $row->wisata->name }}</h4>
                          <p class="mb-1"> {{ $row->caption }}</p>
                          <p class="mb-0"><strong>From:</strong> {{ $row->name_uploader }}</p>
                      </div>
                  </div>
              </div>
          @endforeach
      </div>
      

        </div>

      </div>
    </section>
</main>
@endsection
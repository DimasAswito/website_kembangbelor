@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<main id="main">

  <div class="section-title mt-5 pt-5 ">
    <h2>Tim Pengembang</h2>
  </div>
  <div class="container my-4">
    <!-- Top Main Card -->
    <div class="row justify-content-center mb-4">
        <div class="col-md-3">
            <div class="card">
                <img src="assets/img/bu_ayu.png" class="card-img-top" alt="Main Card Image">
                <div class="card-body c">
                    <h5 class="card-title">Sholihah Ayu Wulandari, S.ST., M.Tr.T.</h5>
                    <p class="card-text">Dosen Pembimbing</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
          <div class="card">
              <img src="assets/img/pak_adi.png" class="card-img-top" alt="Main Card Image">
              <div class="card-body c">
                  <h5 class="card-title">Adi Sucipto, S.ST., M.Tr.T.</h5>
                  <p class="card-text">Dosen Pembimbing</p>
              </div>
          </div>
      </div>
    </div>

    <!-- Row of 4 Cards -->
    <div class="row">
        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="assets/img/lury.jpg" class="card-img-top" alt="Card Image 1">
                <div class="card-body">
                    <h5 class="card-title">Mochammad Lury Choirul Rizky</h5>
                    <p class="card-text">Mahasiswa Politeknik Negeri Jember</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="assets/img/ninis.jpg" class="card-img-top" alt="Card Image 2">
                <div class="card-body">
                    <h5 class="card-title">Nensyah Permadani</h5>
                    <p class="card-text">Mahasiswa Politeknik Negeri Jember</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="assets/img/wito.jpg" class="card-img-top" alt="Card Image 3">
                <div class="card-body">
                    <h5 class="card-title">Dimas Aswito</h5>
                    <p class="card-text">Mahasiswa Politeknik Negeri Jember</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="assets/img/saskia.JPG" class="card-img-top" alt="Card Image 4">
                <div class="card-body">
                    <h5 class="card-title">Sasqia Salsabila At Thohir</h5>
                    <p class="card-text">Mahasiswa Politeknik Negeri Jember</p>
                </div>
            </div>
        </div>
    </div>
</div>
</main>

@endsection
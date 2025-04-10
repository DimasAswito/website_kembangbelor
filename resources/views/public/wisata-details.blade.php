@extends('layouts.app')

@section('title', 'Wisata Details')

@section('content')

<section id="devent" class="devent">

  <div class="section-title mt-5">
    <h2>{{ $wisata->name }}</h2>
</div>
    <div class="container">
        <div class="row mt-1">
            <div class="col-md-6">
              
                <div class="card mb-3">
                    <img src="{{ $wisata->imageUrl }}" class="card-img-top" alt="Foto Wisata" style="object-fit: cover; height:25rem;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">{{ $wisata->name }}</h5>
                        <p class="card-text">{{ $wisata->desc }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Informasi Wisata</h5>
                        <p class="card-text">Lokasi: <strong>{{ $wisata->name }}</strong></p>
                        <p class="card-text">Jam Buka: <strong>{{ $wisata->jamBuka }} - {{ $wisata->jamTutup }}</strong></p>
                        <p class="card-text">Tiket Masuk: <strong>{{ $wisata->htm }}</strong></p>
                    <div>
                      <a href="{{ $wisata->maps }}" class="btn btn-primary d-block mb-2"><i class="bi bi-geo-alt"></i> Buka di Maps</a>
                      <a href="https://wa.me/{{ $wisata->whatsapp }}" class="btn btn-success mt-2 d-block"><i class="bi bi-whatsapp"></i> Kontak via WhatsApp</a>
                    </div>

                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-body">
                        <h5 class="card-title">Lokasi Wisata</h5>
                        <iframe src="{{ $wisata->mapsView }}" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                            </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
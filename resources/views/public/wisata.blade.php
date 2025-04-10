@extends('layouts.app')

@section('title', 'Wisata')

@section('content')
<main id="main">
  <section id="services" class="services mt-5">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Tempat Wisata</h2>
        </div>

        <div class="row">
            @foreach ($wisata as $row)
            <div class="col-md-4 mb-4">
                <a href="{{ route('show_detail_wisata', $row->id_wisata) }}">
                    <div class="card wisata-card">
                        <img src="{{ $row->imageUrl }}" class="card-img-top wisata-img-top" alt="Image">
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
</main>

@endsection
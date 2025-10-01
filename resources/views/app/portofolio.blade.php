@extends('layouts.front')

@section('title', 'Portofolio Kami')

@section('content')
    <div class="container col-lg-12 px-4 py-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <h1 class="display-5 mb-3">
                    Portofolio Kami
                </h1>
                <p class="lead">
                    Kami bangga telah bekerja dengan berbagai industri. Berikut adalah beberapa projek
                    terbaru kami yang mencerminkan kualitas dan komitmen kami.
                </p>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('img/Padelfy (1).png') }}" alt="portofolio_image" width="500" height="300" />
            </div>
        </div>
        <div class="container px-4 py-5">
            <h2 class="text-center mb-5">
                Portofolio Proyek Kami
            </h2>
            <div class="row">
                @foreach ($portofolios as $portofolio)
                    <div class="col-lg-4 col-md-4">
                        <div class="card border-0 shadow-sm h-100">
                            <img src="{{ asset('img/WhatsApp Image 2025-09-16 at 21.46.56_2c253f08.jpg') }}"
                                alt="project_image" class="card-img-top" />
                            <div class="card-body text-center">
                                <h5 class="card-title">
                                    {{ $portofolio->title }}
                                </h5>
                                <p class="card-text">
                                    {{ $portofolio->description }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
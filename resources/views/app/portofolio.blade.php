@extends('layouts.front')

@section('title', 'Portofolio Kami')

@section('content')
    <div class="container px-4 py-5">
        <h2>Portofolio Kami</h2>
        <div class="row">
            @foreach ($portofolios as $porto)
                <div class="col-lg-4 col-md-6 m-4">
                    <div class="card border-0 shadow-sm h-100">
                        <img src={{ asset($porto->image) }} class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">{{ $porto->title }}</h5>
                            <p class="card-text">{{ $porto->category->name }}</p>
                            <p class="card-text">{{ $porto->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

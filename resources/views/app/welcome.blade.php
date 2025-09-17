@extends('layouts.front')

<!-- sistemnya yang diextend bagian yield bakal diisi sama section ini -->
<!-- layout jadi kayak kertas ulangan -->
<!-- yang extend ngisi kertasnya -->

@section('title', 'Welcome')

@section('content')
    <h1>Welcome to skibidi website</h1>
    <div class="card" style="width: 18rem">
        <img src="..." class="card-img-top" alt=""/>
        <div class="card-body">
            <h5 class="card-title">Card TItle</h5>
            <p class="card-text">Card text</p>
            <a href="about" class="btn btn-primary">Go Somewhere</a>
        </div>
    </div>
@endsection
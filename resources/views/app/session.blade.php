@extends('layouts.front')

@section('content')
<div class="text-center">
    <h2>Session data</h2>
</div>
<div>
    <p>Name: {{ $name }}</p>
    <p>Alamat: {{ $alamat }}</p>
    <p>No Telepon: {{ $telepon }}</p>
</div>
@endsection
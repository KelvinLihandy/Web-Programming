@extends('layouts.front')

@section('title', 'Welcome di Website Kami')

@section('content')
<div class="p-5 mb-4 bg-light rounded-3 text-center">
    <div class="container-fluid">
        <h1 class="display-5 fw-bold">
            Selamat Datang di IT Consultant
        </h1>
        <p class="lead col-lg-8 mx-auto">
            Kami hadir untuk membantu anda dalam menyelesaikan permasalahan seputar software Development.
            Produk yang biasa kami tawarkan adalah konsultasi seputar Mobile dan Web Application.
        </p>
        <p>
            <a href="#" class="btn btn-primary">
                Mulai Sekarang
            </a>
            <a href="/about" class="btn btn-secondary">
                Pelajari Lebih Lanjut
            </a>
        </p>
    </div>
</div>
<div class="container py-5">
    <div class="row">
        <div class="col text-center">
            <h2>
                Kenapa memilih kami?
            </h2>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-md-4">
            <h3>
                Clean UI Philosophy
            </h3>
            <p>
                Semua aplikasi yang kami kembangkan memiliki UI yang bersih dan intuitif, 
                dirancang agar anda dapat bisa langsung menggunakan tanpa perlu panduan yang rumit.
            </p>
        </div>
        <div class="col-md-4">
            <h3>
                Fitur Lengkap
            </h3>
            <p>
                Aplikasi yang kami kembangkan berdasarkan kebutuhan anda secara menyeluruh. 
                Tidak ada fitur yang sengaja kami lewatkan.
            </p>
        </div>
        <div class="col-md-4">
            <h3>
                Dukungan Terbaik untuk Anda
            </h3>
            <p>
                Client merupakan pihak yang selalu kami junjung tinggi. 
                Tim kami selalu siap membantu jika anda mengalami kendalan setelah proses handover produk.
            </p>
        </div>
    </div>
</div>
@endsection
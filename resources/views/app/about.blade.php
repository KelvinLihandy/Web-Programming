@extends('layouts.front')

@section('title', 'Tentang Kami')

@section('content')
<div class="container px-5 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="{{ asset('img/Padelfy (1).png') }}" alt="team_meeting" width="700" height="500" class="img-fluid-rounded"/>
        </div>
        <div class="col-lg-6">
            <h1 class="display-5 fw-bold">
                Tentang IT Consultant
            </h1>
            <p classs="lead">
                Kami merupakan perusahaan yang berdedikasi dalam mengembangkan tingakt adipsi penggunaan software dan bidang IT
                bagi masyarakat. Kami memberikan solusi yang inovatif namun teta terjangkau baik bagi kalangan menengah atas 
                ataupun bagi pihak-pihak UMKM yang membutuhkan. Kami selalu berkomitmen untuk menjaga integritas, kualitas serta 
                kepuasan pelanggan.
            </p>
        </div>
    </div>
</div>
<div class="container">
    <h2 class="pb-2 border-bottom text-center">
        Tim hebat Dibalik layar
    </h2>
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card border-0 shadow-sm h-100">
                <img src="{{ asset('img/WhatsApp Image 2025-09-16 at 21.46.56_2c253f08.jpg') }}" alt="team_member-1" class="card-img-top"/>
                <div class="card-body text-center">
                    <h2 class="card-title">
                        Arif
                    </h2>
                    <p class="card-text">
                        Project
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card border-0 shadow-sm h-100">
                <img src="{{ asset('img/WhatsApp Image 2025-09-16 at 21.46.56_2c253f08.jpg') }}" alt="team_member-1" class="card-img-top"/>
                <div class="card-body text-center">
                    <h2 class="card-title">
                        Arif Budiman
                    </h2>
                    <p class="card-text">
                        Project Manager
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card border-0 shadow-sm h-100">
                <img src="{{ asset('img/WhatsApp Image 2025-09-16 at 21.46.56_2c253f08.jpg') }}" alt="team_member-1" class="card-img-top"/>
                <div class="card-body text-center">
                    <h2 class="card-title">
                        Budiman
                    </h2>
                    <p class="card-text">
                        Manager
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
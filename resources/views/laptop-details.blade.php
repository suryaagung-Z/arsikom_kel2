@extends('component.main')

@section('title', 'Detail - '.$laptop['name'])

@section('style')
@endsection

@section('main')
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2 mt-4 mt-xl-5">
            <h2 class="fables-second-text-color font-20 mb-3 semi-font">{{ $laptop['name'] }}</h2>
            <p class="fables-forth-text-color font-14">
                {{ $laptop['description'] }}
            </p>
        </div>
    </div>
    <div class="row mt-4 mt-lg-5 mb-0 mb-lg-4">
        <div class="col-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Spesifikasi</h5>
                            <ul class="list-group">
                                <li class="list-group-item">Prosesor: {{ $laptop['processor'] }}</li>
                                <li class="list-group-item">RAM: {{ $laptop['ram'] }}</li>
                                <li class="list-group-item">Penyimpanan: {{ $laptop['storage'] }}</li>
                                <li class="list-group-item">Grafis: {{ $laptop['graphics'] }}</li>
                                <li class="list-group-item">Layar: {{ $laptop['display'] }}</li>
                                <li class="list-group-item">Sistem Operasi: {{ $laptop['operating_system'] }}</li>
                                <li class="list-group-item">Konektivitas: {{ $laptop['connectivity'] }}</li>
                                <li class="list-group-item">Port: {{ $laptop['ports'] }}</li>
                                <li class="list-group-item">Baterai: {{ $laptop['battery'] }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <img src="{{ $laptop['photo'] }}" class="card-img-top" alt="Laptop Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
            <p class="fables-forth-text-color font-14">
            <h2 class="fables-second-text-color font-20 mb-3 semi-font">Keunggulan</h2>
            <ul class="fables-forth-text-color font-14">
                {{ $laptop['advantages'] }}
            </ul>
            </p>
        </div>
    </div>
</div>
</br>
</br>
<!-- /End page content -->

<!-- Start Footer 2 Background Image  -->
@endsection
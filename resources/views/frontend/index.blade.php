@extends('layouts.app')

@section('title', 'Home Page')
@section('content')

<section id="hero">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-md-7 hero-tagline mx-auto px-auto d-flex align-items-center flex-column">
                <h1>KEAJAIBAN DI SETIAP HALAMAN</h1>
                <p>Tempat terbaik untuk cerita dan petualangan anak-anak! Temukan dunia yang penuh warna, imajinasi, dan kegembiraan bersama <span class="fw-bold">Giggle</span>.</p>
                <button class="btn button-lg-primary">
                    <i class='bx bx-down-arrow-alt'></i>
                </button>
            </div>
        </div>

        <img src="{{ asset ('assets/images/img-hero-giggle.png') }}" alt="home" class="img-hero position-absolute start-0 bottom-0">
    </div>
</section>

@endsection
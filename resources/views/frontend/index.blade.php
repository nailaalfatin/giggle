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
                    <i class='bx bx-chevron-down'></i>
                </button>
            </div>
        </div>

        <img src="{{ asset ('assets/images/img-hero-giggle.png') }}" alt="home" class="img-hero position-absolute start-0 bottom-0">
    </div>
</section>

<section>
    <div class="carousel">
        <div class="carousel-content">
            <div class="carousel-item">
                <img src="{{ asset ('assets/images/tes.png')}}" alt="Image">
                <div class="carousel-text">
                    <h2></h2>
                    <p></p>
                    <button class="start-reading bingah">Mulai Baca →</button>
                </div>
                <button class="carousel-button left"><i class='bx bx-chevron-left'></i></button>
                <button class="carousel-button right"><i class='bx bx-chevron-right'></i></button>
            </div>
        </div>
    </div>
    <div class="footer">
        <marquee class="footer-item bingah">giggle</marquee>
        <marquee class="footer-item bingah">giggle</marquee>
        <marquee class="footer-item bingah">giggle</marquee>
        <marquee class="footer-item bingah">giggle</marquee>
        <marquee class="footer-item bingah">giggle</marquee>
        <marquee class="footer-item bingah">giggle</marquee>
    </div>
</section>

@endsection
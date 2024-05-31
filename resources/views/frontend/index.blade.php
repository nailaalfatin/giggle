@extends('layouts.app')

@section('title', 'Home Page')
@section('content')

<<<<<<< HEAD


=======
<!-- HERO -->
>>>>>>> cd8645c488a251ccad34cc005734e49cd1da95eb
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

        <img src="{{ asset ('assets/images/img-book1.png') }}" alt="book" class="img-book-hero position-absolute">
        <img src="{{ asset ('assets/images/img-book2.png') }}" alt="book" class="img-book-hero2 position-absolute">
        <img src="{{ asset ('assets/images/img-hero-giggle.png') }}" alt="hero" class="img-hero position-absolute start-0 bottom-0">
    </div>
</section>
<!-- HERO END -->

<!-- KATEGORI LANDING -->
<section id="kategori-landing">
    <div class="container">
        <div class="row mt-5 kategori-content">
            <div class="col-12 text-center">
                <h1 class="bingah">Jelajah Perkategori</h1>
            </div>
        </div>


        <div class="row mt-5 ">
            <div class="col-md-3 text-center">
                <div class="card-kategori">
                    <div class="card-kategori__imgBox">
                        <img src="{{ asset ('assets/images/kategori/img-cerita_rakyat.png') }}" alt="">
                        <h3 class="card-kategori__title">Cerita Rakyat</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="card-kategori">
                    <div class="card-kategori__imgBox">
                        <img src="{{ asset ('assets/images/kategori/img-cerita_rakyat.png') }}" alt="">
                        <h3 class="card-kategori__title">Cerita Rakyat</h3>
                    </div>
                </div>
            </div>  

            
        </div>
        <img src="{{ asset ('assets/images/img-kategori1.svg') }}" alt="" class="img-book-hero position-absolute">
        <img src="{{ asset ('assets/images/img-kategori2.svg') }}" alt="" class="img-hero position-absolute start-0 bottom-0">

    </div>
</section>
<!-- KATEGORI LANDING END -->

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
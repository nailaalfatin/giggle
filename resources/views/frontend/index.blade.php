@extends('layouts.app')

@section('title', 'Home Page')
@section('content')


<section id="hero">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-md-7 hero-tagline mx-auto px-auto d-flex align-items-center flex-column">
                <h1>KEAJAIBAN DI SETIAP HALAMAN</h1>
                <p>Tempat terbaik untuk cerita dan petualangan anak-anak! Temukan dunia yang penuh warna, imajinasi, dan kegembiraan bersama <span class="fw-bold">Giggle</span>.</p>
                <a href="#slider" class="btn button-lg-primary">
                    <i class='bx bx-chevron-down'></i>
                </a>
            </div>
        </div>

        <img src="{{ asset ('assets/images/img-book1.png') }}" alt="book" class="img-book-hero position-absolute">
        <img src="{{ asset ('assets/images/img-book2.png') }}" alt="book" class="img-book-hero2 position-absolute">
        <img src="{{ asset ('assets/images/img-hero-giggle.png') }}" alt="hero" class="img-hero position-absolute start-0 bottom-0">
    </div>
</section>
<!-- HERO END -->

<!-- SLIDER -->
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
<!-- SLIDER END -->

<!-- KATEGORI LANDING -->
<section id="kategori-landing" class="position-relative">
    <div class="container">
        <div class="row kategori-content">
            <div class="col-12 text-center">
                <h1 class="bingah">Jelajah Perkategori</h1>
            </div>
        </div>

        <div class="row mt-5 ">

            <div class="col-lg-12">
                <div class="row row-gap-5">


                    @foreach($categories as $category)
                    @if ($loop->index < 3) <div class="col-md-3 text-center">
                        <div class="card-kategori">
                            <div class="card-kategori__imgBox">
                                <img src="{{ asset('upload/category/'.$category->image) }}" alt="">
                                <h3 class="card-kategori__title">{{ $category->name }}</h3>
                            </div>
                        </div>
                </div>
                @endif
                @endforeach

                @if ($categories->count() > 3)

                <div class="col-md-3 text-center">
                    <a href="{{ route('category') }}" class="text-decoration-none">
                        <div class="card-kategori">
                            <div class="card-kategori__imgBox">
<<<<<<< HEAD
                                <a href="{{ route('category') }}" class="btn btn-primary" style="margin-top: 50%;">See All</a>
=======
                                <div class="btn-seeall">
                                    <i class='bx bx-chevron-right'></i>
                                </div>
                                <h3 class="card-kategori__title">See All</h3>
>>>>>>> ce11f18d41a1330c50ccc3e09037c6a4f96cae72
                            </div>

                        </div>
                    </a>


                </div>
                @endif
            </div>
        </div>
        <img src="{{ asset ('assets/images/img-kategori1.svg') }}" alt="" class="img-book-hero position-absolute">
        <img src="{{ asset ('assets/images/img-kategori2.svg') }}" alt="" class="img-hero position-absolute start-0 bottom-0">

    </div>
</section>
<!-- KATEGORI LANDING END -->

@endsection
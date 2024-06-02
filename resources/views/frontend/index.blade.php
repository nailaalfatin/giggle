@extends('layouts.app')

@section('title', 'Home Page')
@section('content')

<!-- HERO -->
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

<section id="slider">

    <div class="custom-shape-divider-top-1717118743">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
        </svg>
    </div>

    <!-- <div class="carousel">
        <div class="carousel-inner" id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-content">
                <div class="carousel-item">
                    <img src="{{ asset ('assets/images/slide3.png')}}" alt="Image">
                    <div class="carousel-text">
                        <h2>Jangan Dekat Dekat!</h2>
                        <p>lorem ipsum dolor sit ametius, abdakadabra lorem dolor amet.</p>
                        <button class="start-reading bingah">Mulai Baca <i class='bx bx-right-arrow-alt'></i></button>
                    </div>
                    <button class="carousel-button left"><i class='bx bx-chevron-left'></i></button>
                    <button class="carousel-button right"><i class='bx bx-chevron-right'></i></button>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset ('assets/images/slide1.png')}}" alt="Image">
                    <div class="carousel-text">
                        <h2>Jangan Dekat Dekat!</h2>
                        <p>lorem ipsum dolor sit ametius, abdakadabra lorem dolor amet.</p>
                        <button class="start-reading bingah">Mulai Baca <i class='bx bx-right-arrow-alt'></i></button>
                    </div>
                    
                </div>
                <div class="carousel-item">
                    <img src="{{ asset ('assets/images/slide2.png')}}" alt="Image">
                    <div class="carousel-text">
                        <h2>Jangan Dekat Dekat!</h2>
                        <p>lorem ipsum dolor sit ametius, abdakadabra lorem dolor amet.</p>
                        <button class="start-reading bingah">Mulai Baca <i class='bx bx-right-arrow-alt'></i></button>
                    </div>

                </div>

                <button class=" carousel-button left" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <i class='bx bx-chevron-left'></i>
                </button>
                <button class=" carousel-button right" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <i class='bx bx-chevron-right'></i>
                </button>
                
            </div>
        </div>

    </div> -->
    <div id="carouselExampleControls" class="carousel" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item ">
                    <img src="{{ asset ('assets/images/slide3.png')}}" class="d-block w-100" alt="Image">
                    <div class="carousel-text">
                        <h2>Jangan Dekat Shika!</h2>
                        <p>Lorem ipsum dolor sit ametius, abdakadabra lorem dolor amet.</p>
                        <button class="start-reading bingah">Mulai Baca <i class='bx bx-right-arrow-alt'></i></button>
                    </div>
                </div>
                <div class="carousel-item active">
                    <img src="{{ asset ('assets/images/slide1.png')}}" class="d-block w-100" alt="Image">
                    <div class="carousel-text">
                        <h2>Jangan Dekat Nei!</h2>
                        <p>Lorem ipsum dolor sit ametius, abdakadabra lorem dolor amet.</p>
                        <button class="start-reading bingah">Mulai Baca <i class='bx bx-right-arrow-alt'></i></button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset ('assets/images/slide2.png')}}" class="d-block w-100" alt="Image">
                    <div class="carousel-text">
                        <h2>Jangan Dekat Odit!</h2>
                        <p>Lorem ipsum dolor sit ametius, abdakadabra lorem dolor amet.</p>
                        <button class="start-reading bingah">Mulai Baca <i class='bx bx-right-arrow-alt'></i></button>
                    </div>
                </div>
                <button class="carousel-button left" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <i class='bx bx-chevron-left'></i>
                </button>
                <button class="carousel-button right" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <i class='bx bx-chevron-right'></i>
                </button>
            </div>

        </div>


    <div class="text-wrapper mt-5">
        <a href="#" class="marquee">Giggle</a>
        <a href="#" class="marquee">Giggle</a>
        <a href="#" class="marquee">Giggle</a>
        <a href="#" class="marquee">Giggle</a>
        <a href="#" class="marquee">Giggle</a>
        <a href="#" class="marquee">Giggle</a>
        <a href="#" class="marquee">Giggle</a>
        <a href="#" class="marquee">Giggle</a>
        <a href="#" class="marquee">Giggle</a>
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
            <div class="col-md-12 col-lg-12">
                <div class="row row-gap-5">
                    
                    <div class="col-md-3 text-center d-flex align-items-center justify-content-center">
                        <div class="card-kategori">
                            <div class="card-kategori__imgBox">
                                <img src="{{ asset ('assets/images/kategori/img-cerita_rakyat.png') }}" alt="">
                                <h3 class="card-kategori__title">Cerita Rakyat</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 text-center d-flex align-items-center justify-content-center">
                        <div class="card-kategori">
                            <div class="card-kategori__imgBox">
                                <div class="btn-seeall">
                                    <i class='bx bx-chevron-right'></i>
                                </div>
                                <h3 class="card-kategori__title">See All</h3>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-12 col-lg-6 mt-sm-5 mt-lg-0">
                

            </div>


        </div>
    </div>

    <img src="{{ asset ('assets/images/img-kategori1.svg') }}" alt="" class="img-kategori position-absolute">
    <img src="{{ asset ('assets/images/img-kategori2.svg') }}" alt="" class="img-kategori2 position-absolute">

</section>
<!-- KATEGORI LANDING END -->
@endsection
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
                <button class="btn button-lg-primary">
                    <i class='bx bx-down-arrow-alt'></i>
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

            <!-- @foreach($categories as $category)
                @if ($loop->index < 3)
                    <div class="col-md-3 text-center">
                        <div class="card-kategori">
                            <div class="card-kategori__imgBox">
                                <img src="{{ asset('assets/images/kategori/' . $category->image) }}" alt="">
                                <h3 class="card-kategori__title">{{ $category->name }}</h3>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach

            @if ($categories->count() > 3)
                <div class="col-md-3 text-center">
                    <div class="card-kategori">
                        <div class="card-kategori__imgBox">
                            <a href="{{ route('categories.index') }}" class="btn btn-primary" style="margin-top: 50%;">See All</a>
                        </div>
                    </div>
                </div>
            @endif -->
        </div>
        <img src="{{ asset ('assets/images/img-kategori1.svg') }}" alt="" class="img-book-hero position-absolute">
        <img src="{{ asset ('assets/images/img-kategori2.svg') }}" alt="" class="img-hero position-absolute start-0 bottom-0">

    </div>
</section>
<!-- KATEGORI LANDING END -->

@endsection
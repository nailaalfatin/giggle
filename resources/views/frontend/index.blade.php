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
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach($sliders as $slider)
            <div class="carousel-item active">
                <img src="{{ asset($slider->image) }}" class="d-block w-100" alt="Slide 1">
                <div class="carousel-text d-none d-md-block">
                    <h5>{{$slider->title}}</h5>
                    <p>{{$slider->description}}</p>
                    <button class="start-reading bingah">Mulai Baca <i class='bx bx-right-arrow-alt'></i></button>
                </div>
            </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
    </div>
</section>
<!-- SLIDER END -->

<!-- MARQUEE -->
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
<!-- MARQUEE END -->

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
                <div class="row row-gap-5 ">
                    @foreach($categories as $category)
                    @if ($loop->index < 3) <div class="col-md-3 text-center d-flex align-items-center justify-content-center">
                        <a href="{{ route('stories-category',$category->slug)}}" class="text-decoration-none">
                            <div class="card-kategori">
                                <div class="card-kategori__imgBox">
                                    <img src="{{ asset('upload/category/'.$category->image) }}" alt="">
                                    <h3 class="card-kategori__title">{{ $category->name }}</h3>
                                </div>
                            </div>
                        </a>
                </div>
                @endif
                @endforeach

                @if ($categories->count() > 3)

                <div class="col-md-3 text-center d-flex justify-content-center">
                    <a href="{{ route('categories') }}" class="text-decoration-none">
                        <div class="card-kategori seeAll">
                            <div class="card-kategori__imgBox d-flex flex-column align-items-center justify-content-center">
                                <div class="btn-seeall mb-2">
                                    <i class='bx bx-chevron-right'></i>
                                </div>
                                <h3 class="card-kategori__title">Jelajah Lainnya</h3>
                            </div>
                        </div>
                    </a>
                </div>
                @endif
            </div>
        </div>
    </div>

    <img src="{{ asset ('assets/images/img-kategori1.svg') }}" alt="" class="img-kategori position-absolute">
    <img src="{{ asset ('assets/images/img-kategori2.svg') }}" alt="" class="img-kategori2 position-absolute">
    </div>




</section>
<!-- KATEGORI LANDING END -->

<!-- CERITA POPULER -->
<section id="populer-landing" class="position-relative">
    <div class="container">
        <div class="row populer-content">
            <div class="col-12 text-center">
                <h1 class="bingah">Cerita Populer</h1>
            </div>
        </div>

        <div class="row mt-5 ">
            <div class="col-lg-12">
                <div class="row row-gap-5">
                    @if($trendingStory)
                    @foreach($trendingStory as $story)
                    <div class="col-md-3 text-center">
                        <a href="" class="text-decoration-none modal-story" data-bs-toggle="modal" data-bs-target="#exampleModalCenter{{ $story->id }}">
                            <div class="book-div d-flex flex-column align-items-center justify-content-center">
                                <div class="book-card">
                                    <div class="spine"></div>
                                    <img src="{{ asset($story->image_cover)}}" alt="{{ $story->title }}">
                                </div>
                                <div class="d-flex align-items-center pt-3 book-title">
                                    <h5 class="bingah ">{{ $story->title }}</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                    @endif
                </div>
                <div class="btn-populer col-12 d-flex align-items-center justify-content-center">
                    <button class="bingah" onclick="window.location.href='{{ route("stories-trending") }}'">Ayo Berpetualang!</button>
                </div>
            </div>
        </div>

        <!-- modal -->
        @foreach($stories as $story)
        <div class="modal fade" id="exampleModalCenter{{ $story->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle{{ $story->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable " role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body overflow-auto">
                        <div class="story-detail-header d-flex flex-column align-items-center">
                            <img src="{{ asset($story->image_cover)}}" alt="" class="shadow-sm">
                            <h5>{{ $story->title }}</h5>
                            <p>{{ $story->author }}</p>
                        </div>
                        <div class="btn-read-fav d-flex align-items-center w-100 mt-3">
                            <a href="{{ route('stories-view', ['category_slug' => $story->category->slug, 'story_slug' => $story->slug]) }}">
                                <button class="">Baca Sekarang!</button>
                            </a>
                            <i class='bx bx-heart ms-2'></i>
                        </div>
                        <div class="story-detail-footer mt-4 mb-4">
                            <p>{{ $story->small_description }}</p>
                            <hr class="my-3">
                            <div class="level-badge d-flex">
                                <p>Tingkat kesulitan baca:</p>
                                <span class=" ms-3 text-uppercase">{{ $story->level->name }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>


<!-- CERITA POPULER END -->

<!-- FOOTER -->
<footer class="footer">
    <img src="{{ asset ('assets/images/blue-footer.svg') }}" alt="" class="blue-footer position-absolute">
    <img src="{{ asset ('assets/images/yellow-footer.svg') }}" alt="" class="yellow-footer position-absolute">
    <div class="footer-yellow"></div>
    <div class="footer-top">
        <img src="{{ asset ('assets/images/giggle-logo.svg') }}" alt="Giggle Logo" class="footer-logo">
        <p class="footer-brand bingah text-primary m-0">Giggle</p>
    </div>
    <div class="footer-middle text-center">
        <nav>
            <ul class="footer-menu">
                <li><a href="#">Beranda</a></li>
                <li><a href="#">Kategori</a></li>
                <li><a href="#">Cerita Populer</a></li>
                <li><a href="#">Tentang Kami</a></li>
                <li><a href="#">FAQ</a></li>
            </ul>
        </nav>
        <div class="footer-contact ">
            <p>Email: giggle@gmail.com</p>
            <p>Phone: +62 123 456 7890</p>
        </div>
    </div>
    <div class="footer-bottom">
        <p> &copy; 2024 Giggle. All Rights Reserved.</p>
        <nav>
            <ul class="footer-legal">
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms of Service</a></li>
            </ul>
        </nav>
    </div>
</footer>
<!-- FOOTER END -->
@endsection
@extends('layouts.app')

@section('title', 'Cerita Populer')
@section('content')

<div class="container paddingtop">
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
            </div>
        </div>

        <!-- modal -->
        @foreach($trendingStory as $story)
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

@endsection
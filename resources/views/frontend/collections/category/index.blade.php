@extends('layouts.app')

@section('title', 'Semua Kategori')
@section('content')

<div class="paddingtop bg-light h-full">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <h4 class="mb-5 text-center bingah">Jelajah Perkategori</h4>
            </div>


        @forelse($categories as $category)
        <div class="col-md-3 text-center">
            <!-- {{ route('stories-category',$category->slug)}} -->
                <a href="{{ route('stories-category',$category->slug)}}" class="text-decoration-none">
                    <div class="card-kategori ">
                        <div class="card-kategori__imgBox">
                            <img src="{{ asset('upload/category/'.$category->image) }}" alt="">
                            <h3 class="card-kategori__title">{{ $category->name }}</h3>
                        </div>
                    </div>
                </a>
        </div>
        
        @empty
        <div class="col-md-12">
            <h5 class="bingah">No categories available</h5>
        </div>
        @endforelse
    </div>
</div>
</div>

@endsection
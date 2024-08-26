@extends('layouts.app')

@section('title')
    {{$category->meta_title}}
@endsection

@section('content')

<div class="paddingtop bg-light h-full">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="mb-4 bingah">Cerita dari Kategori <span style="color: #0167F8;">{{$category->name}}</span> </h3>
            </div>

            <livewire:frontend.story.index :category="$category" :levels="$levels"/>
           
        </div>
    </div>
</div>

@endsection
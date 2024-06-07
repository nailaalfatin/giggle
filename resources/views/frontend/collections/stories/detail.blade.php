@extends('layouts.app')

@section('title')
    {{$story->meta_title}}
@endsection

@section('meta_keyword')
    {{$story->meta_keyword}}
@endsection

@section('meta_description')
    {{$story->meta_description}}
@endsection

@section('content')

<div>
    <livewire:frontend.story.detail :category="$category" :story="$story" />
</div>
@endsection
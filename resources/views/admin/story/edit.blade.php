@extends('layouts.admin')

@section('content')
<div>
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tabel /</span> Cerita
                <a href="{{ route('story') }}" class="btn btn-primary btn-md text-white float-end">Back</a>
            </h4>
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="card">
                        <div class="card-header">
                            <h3>Edit Cerita</h3>
                        </div>

                        <div class="card-body">
                            <form action="{{route('story-update', $story->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method("PUT")
                                <div class="form-group mb-2">
                                    <label for="title">Judul Dongeng</label>
                                    <input type="text" name="title" id="title" class="form-control" value="{{$story->title}}">
                                </div>
                                <div id="slides">
                                    @foreach($story->slides as $slide)
                                    <div class="slide">
                                        <div class="form-group mb-2">
                                            <label for="image">Foto</label>
                                            <input type="file" name="images[]" class="form-control">
                                            <img src="{{ asset($slide->image_path) }}" alt="" width="100px" height="100px" class="mt-4">
                                        </div>
                                        <div class="form-group mb-2">
                                            <label for="description">Deskripsi</label>
                                            <textarea name="descriptions[]" class="form-control" rows="4">{{$slide->description}}</textarea>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="col-md-12 mb-3 mt-4">
                                    <button type="button" id="addSlide" class="btn btn-secondary">Tambah Slide</button>
                                    <button type="submit" class="btn btn-primary float-end">Simpan</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
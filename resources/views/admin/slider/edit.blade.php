@extends('layouts.admin')

@section('content')
<div>
        <!-- Content wrapper -->
        <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tabel /</span> Slider
                <a href="{{ route('slider') }}" class="btn btn-primary btn-md text-white float-end">Back</a>
            </h4>
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="card">
                        <div class="card-header">
                            <h3>Edit Slider</h3>
                        </div>

                        <div class="card-body">
                            <form action="{{ route('slider-update', $slider->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="">Judul</label>
                                        <input type="text" value="{{ $slider->title }}" name="title" class="form-control">
                                        @error('title')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Gambar</label>
                                        <input type="file" name="image" class="form-control">
                                        @error('image')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                        <img src="{{ asset("$slider->image") }}" alt="slider" style="width: 70px; height: 70px" class="mt-2">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Deskripsi</label>
                                        <textarea type="text" name="description" class="form-control" rows="3">{{ $slider->description }}</textarea>
                                        @error('description')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Status</label>
                                        <input type="checkbox" name="status" {{ $slider->status == '1' ? 'checked' : '' }}>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <button type="submit" class="btn btn-primary float-end text-white">Simpan</button>
                                    </div>
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
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
                            <h3>Tambah Cerita</h3>
                        </div>

                        <div class="card-body">
                            <form action="{{ route('story-store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-2">
                                    <label for="category_id">Kategori</label>
                                    <select name="category_id" id="category_id" class="form-control">
                                        @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id') 
                                        <small class="text-danger">{{$message}}</small> 
                                    @enderror
                                </div>

                                <div class="form-group mb-2">
                                    <label for="">Level baca</label>
                                    <select name="level_id" id="level_id" class="form-control">
                                        @foreach($levels as $level)
                                        <option value="{{ $level->id }}">{{ $level->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('level_id') 
                                        <small class="text-danger">{{$message}}</small> 
                                    @enderror
                                </div>

                                <div class="form-group mb-2">
                                    <label for="title">Author</label>
                                    <input type="text" name="author" id="author" class="form-control">
                                    @error('author') 
                                        <small class="text-danger">{{$message}}</small> 
                                    @enderror
                                </div>

                                <div class="form-group mb-2">
                                    <label for="title">Judul Dongeng</label>
                                    <input type="text" name="title" id="title" class="form-control">
                                    @error('title') 
                                        <small class="text-danger">{{$message}}</small> 
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="">Meta Title</label>
                                    <input type="text" name="meta_title" class="form-control">
                                    @error('meta_title') 
                                        <small class="text-danger">{{$message}}</small> 
                                    @enderror
                                </div> 

                                <div class="mb-3">
                                    <label for="">Small Description</label>
                                    <textarea name="small_description" class="form-control" rows="4"></textarea>
                                    @error('small_description') 
                                        <small class="text-danger">{{$message}}</small> 
                                    @enderror
                                </div>

                                <div id="slides">
                                    <div class="slide">
                                        <div class="form-group mb-2">
                                            <label for="image">Foto</label>
                                            <input type="file" name="images[]" class="form-control">
                                            @error('images') 
                                                <small class="text-danger">{{$message}}</small> 
                                            @enderror
                                        </div>

                                        <div class="form-group mb-2">
                                            <label for="description">Deskripsi</label>
                                            <textarea name="descriptions[]" class="form-control" rows="4"></textarea>
                                            @error('descriptions') 
                                                <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="">Trending</label>
                                    <input type="checkbox" name="trending" style="width: 20px; height: 20px;">
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

<script>
    document.getElementById('addSlide').addEventListener('click', function() {
        const slideTemplate = `
        <div class="slide">
            <div class="form-group">
                <label for="image">Foto</label>
                <input type="file" name="images[]" class="form-control">
            </div>
            <div class="form-group">
                <label for="description">Deskripsi</label>
                <textarea name="descriptions[]" class="form-control"></textarea>
            </div>
        </div>`;
        document.getElementById('slides').insertAdjacentHTML('beforeend', slideTemplate);
    });
</script>
@endsection
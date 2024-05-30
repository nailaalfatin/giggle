@extends('layouts.admin')

<!-- yang di dalam section yang akan berubah ubah nantinya kontennya -->
@section('content')
<div>
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tabel /</span> Kategori
                <a href="{{ route('category') }}" class="btn btn-primary btn-md text-white float-end">Back</a>
            </h4>
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="card">
                        <div class="card-header">
                            <h3>Edit Kategori</h3>
                        </div>

                        <div class="card-body">
                            <form action="{{ route('category-update', $category->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="">Nama</label>
                                        <input type="text" name="name" class="form-control" value="{{$category->name}}">
                                        @error('name')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Slug</label>
                                        <input type="text" name="slug" class="form-control" value="{{$category->slug}}">
                                        @error('slug')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Deskripsi</label>
                                        <textarea type="text" name="description" class="form-control" rows="3">{{$category->description}}</textarea>
                                        @error('description')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Gambar</label>
                                        <input type="file" name="image" class="form-control">
                                        <img src="{{ asset('/upload/category/'.$category->image)}}" alt="" width="100px" height="100px" class="mt-4">
                                        @error('image')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Status</label>
                                        <input type="checkbox" name="status" {{$category->status == '1' ? 'checked' : ''}}>
                                    </div>

                                    <div class="coml-md-12 mt-5 mb-4">
                                        <h4>Tag SEO</h4>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label for="">Meta Judul</label>
                                        <input name="meta_title" type="text" class="form-control" value="{{$category->meta_title}}">
                                        @error('meta_title')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="">Meta Keyword</label>
                                        <textarea name="meta_keyword" type="text" class="form-control" rows="3">{{$category->meta_keyword}}</textarea>
                                        @error('meta_keyword')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="">Meta Deskripsi</label>
                                        <textarea name="meta_description" type="text" class="form-control" rows="3">{{$category->meta_description}}</textarea>
                                        @error('meta_description')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
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
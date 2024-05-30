@extends('layouts.admin')

<!-- yang di dalam section yang akan berubah ubah nantinya kontennya -->
@section('content')
<div>
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tabel /</span> Kategori
                <a href="{{ route('category') }}" class="btn btn-primary btn-md text-white float-end">Kembali</a>
            </h4>
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="card">
                        <div class="card-header">
                            <h3>Tambah Kategori</h3>
                        </div>

                        <div class="card-body">
                            <form action="{{ route('category-store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="">Nama</label>
                                        <input type="text" name="name" class="form-control">
                                        @error('name')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Slug</label>
                                        <input type="text" name="slug" class="form-control">
                                        @error('slug')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Deskripsi</label>
                                        <textarea type="text" name="description" class="form-control" rows="3"></textarea>
                                        @error('description')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Gambar</label>
                                        <input type="file" name="image" class="form-control">
                                        @error('image')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Status</label>
                                        <input type="checkbox" name="status">
                                    </div>

                                    <div class="coml-md-12 mt-5 mb-4">
                                        <h4>Tag SEO</h4>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label for="">Meta Judul</label>
                                        <input name="meta_title" type="text" class="form-control">
                                        @error('meta_title')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="">Meta Keyword</label>
                                        <textarea name="meta_keyword" type="text" class="form-control" rows="3"></textarea>
                                        @error('meta_keyword')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="">Meta Deskripsi</label>
                                        <textarea name="meta_description" type="text" class="form-control" rows="3"></textarea>
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
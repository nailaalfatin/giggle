@extends('layouts.admin')

@section('content')

<div>
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tabel /</span> Cerita
                <a href="{{ route('story-create') }}" class="btn btn-primary btn-md text-white float-end">Tambah Cerita</a>
            </h4>
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="card">
                        <h5 class="card-header">Cerita</h5>
                        <div class="text-nowrap table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Kategori</th>
                                        <th>Judul</th>
                                        <th>Slide</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    @foreach($stories as $story)
                                    <tr>
                                        <td>{{ $story->id }}</td>
                                        <td>{{ $story->category ? $story->category->name : 'No Category' }}</td>
                                        <td>{{ $story->title }}</td>
                                        <td>
                                            <ul>
                                                @foreach($story->slides as $slide)
                                                <li class="mb-2">
                                                    <img src="{{ asset($slide->image_path) }}" alt="Slide Image" width="50">
                                                    <!-- Potong teks dan tambahkan elipsis -->
                                                    <div style="max-width: 200px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                                        {{ substr($slide->description, 0, 200) }}{{ strlen($slide->description) > 200 ? '...' : '' }}
                                                    </div>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{ route('story-edit', $story->id)}}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                    <a class="dropdown-item" href="{{ route('story-delete', $story->id)}}"><i class="bx bx-trash me-1"></i> Hapus</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
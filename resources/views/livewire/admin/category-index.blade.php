<div>
    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="deleteModal" aria-labelledby="exampleModalLabel" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog">

            <form wire:submit.prevent="destroyCategory" class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="backDropModalTitle">Hapus Kategori Ini</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h6>Apakah anda yakin untuk menghapus kategori ini?</h6>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </div>
            </form>
        </div>
    </div>
    <!-- end modal -->

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tabel /</span> Kategori
                <a href="{{ route('category-create') }}" class="btn btn-primary btn-md text-white float-end">Tambah Kategori</a>
            </h4>
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="card">
                        <h5 class="card-header">Kategori</h5>
                        <div class="text-nowrap">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    @foreach($categories as $category)
                                    <tr>
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td><span class="badge bg-label-success me-1">{{ $category->status == '1'? 'Hidden' : 'Visible' }}</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{ route('category-edit', $category -> id)}}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                    <a class="dropdown-item" href="" wire:click="deleteCategory( {{$category->id}} )" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="bx bx-trash me-1"></i> Hapus</a>
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
@push('script')
<script>
    window.addEventListener('close-modal', event => {
        $('#deleteModal').modal('hide');
    })
</script>
@endpush
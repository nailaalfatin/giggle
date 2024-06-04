<div>
@include('livewire.admin.level-modal-form')
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tabel /</span> Level
                <a href="#" data-bs-toggle="modal" data-bs-target="#addLevelModal" class="btn btn-primary btn-md text-white float-end">Tambah Level</a>
            </h4>
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="card">
                        <h5 class="card-header">Level</h5>
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
                                    @foreach ($levels as $level)
                                    <tr>
                                        <td>{{ $level->id }}</td>
                                        <td>{{ $level->name }}</td>
                                        <td>{{ $level->slug }}</td>
                                        <td><span class="badge bg-label-success me-1">{{ $level->status == '1' ? 'hidden':'visible' }}</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="" wire:click="editLevel({{$level->id}})" data-bs-toggle="modal" data-bs-target="#updateLevelModal"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                    <a class="dropdown-item" href="" wire:click="deleteLevel({{$level->id}})" data-bs-toggle="modal" data-bs-target="#deleteLevelModal"><i class="bx bx-trash me-1"></i> Hapus</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div>
                                {{ $levels->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- untuk menghilangkan modal -->
@push('script')

<script>
    Livewire.on('closeModal', function() {
        $('#addLevelModal').modal('hide');
        $('#updateLevelModal').modal('hide');
        $('#deleteLevelModal').modal('hide');
    });
</script>

@endpush
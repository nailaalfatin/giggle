<!-- Modal Add-->
<div wire:ignore.self class="modal fade" id="addLevelModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Level</h1>
                <button type="button" wire:click="closeModal" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form wire:submit.prevent="storeLevel">
                <div class="modal-body">
                <!-- Menambahkan level -->

                    <div class="mb-3">
                        <label for="">level Name</label>
                        <input type="text" wire:model.defer="name" class="form-control" placeholder="Level Name">
                        @error('name')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="">Level Slug</label>
                        <input type="text" wire:model.defer="slug" class="form-control" placeholder="Level Slug">
                        @error('slug')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="">Status</label><br>
                        <input type="checkbox" wire:model.defer="status"> Checked = Hidden, Un-Checked = Visible
                        @error('status')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" wire:click="closeModal" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary text-white">Save</button>
                </div>
            </form>

        </div>
    </div>
</div>


<!-- Modal Update-->
<div wire:ignore.self class="modal fade" id="updateLevelModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Update Level</h1>
                <button type="button" class="btn-close" wire:click="closeModal" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div wire:loading.remove>
                <form wire:submit.prevent="updateLevel">
                    <div class="modal-body">
                        <!-- Menambahkan category -->


                        <div class="mb-3">
                            <label for="">Level Name</label>
                            <input type="text" wire:model.defer="name" class="form-control" placeholder="Level Name">
                            @error('name')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Level Slug</label>
                            <input type="text" wire:model.defer="slug" class="form-control" placeholder="Level Slug">
                            @error('slug')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Status</label><br>
                            <input type="checkbox" wire:model.defer="status" style="width: 17px; height: 17px;"> Checked = Hidden, Un-Checked = Visible
                            @error('status')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" wire:click="closeModal" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success text-white">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- Modal Delete-->
<div wire:ignore.self class="modal fade" id="deleteLevelModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Delete This Level</h1>
                <button type="button" class="btn-close" wire:click="closeModal" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div wire:loading.remove>
                <form wire:submit.prevent="destroyLevel">
                    <p class="p-4 fs-6">Are you sure to delete this data?</p>
                    <div class="modal-footer">
                        <button type="button" wire:click="closeModal" class="btn btn-secondary text-white" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger text-white">Yes, Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('livewire:load', function () {
        window.addEventListener('close-modal', event => {
            // Menutup semua modal
            $('#addLevelModal').modal('hide');
            $('#updateLevelModal').modal('hide');
            $('#deleteLevelModal').modal('hide');
        });
    });
</script>
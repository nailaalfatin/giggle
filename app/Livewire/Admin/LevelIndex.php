<?php

namespace App\Livewire\Admin;

use App\Models\Level;
use App\Models\Story;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithPagination;

class LevelIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $name, $slug, $status, $story_id, $level_id;

    public function rules()
    {
        return [
            'name'      => 'required|string',
            'slug'      => 'required|string',
            'status'    => 'nullable',
        ];
    }

    // reset form
    public function resetInput()
    {
        $this->name = NULL;
        $this->slug = NULL;
        $this->status = NULL;
        $this->story_id = NULL; //ini ditambahkan krtika proses delete data
    }

    public function storeLevel()
    {
        $validatedData = $this->validate();
        Level::create([
            'name'      => $this->name,
            'slug'      => Str::slug($this->slug),
            'status'    => $this->status == true ? '1' : '0',
        ]);
        session()->flash('message', 'Level Added Successfully');
        // untuk meghilangkan modal setelah dipencet
        $this->dispatch('close-modal');
        $this->resetInput();
    }

    // ini untuk edit edit data
    public function closeModal()
    {
        $this->resetInput();
    }

    public function openModal()
    {
        $this->resetInput();
    }

    // menampilkan si modal dan mendapatkan data
    public function editLevel($level_id)
    {
        $this->level_id = $level_id;
        // untuk mendapatkan daya yang adan diedit
        $level = Level::findOrFail($level_id);
        $this->name     = $level->name;
        $this->slug     = $level->slug;
        $this->status   = $level->status;
    }

    public function updateLevel()
{
    // Validasi data yang diterima dari form atau request
    $validatedData = $this->validate([
        'name'      => 'required|string',
        'slug'      => 'required|string',
        'status'    => 'nullable',
    ]);

    // Cari data level yang akan diperbarui
    $level = Level::findOrFail($this->level_id);

    // Perbarui data level sesuai dengan data yang diterima
    $level->update([
        'name'      => $this->name,
        'slug'      => Str::slug($this->slug),
        'status'    => $this->status == true ? '1' : '0',
    ]);

    // Flash message untuk memberi informasi kepada pengguna bahwa level berhasil diperbarui
    session()->flash('message', 'Level Updated Successfully');

    // Tutup modal setelah proses pembaruan selesai
    $this->dispatch('close-modal');

    // Reset input form
    $this->resetInput();
}


    // delete
    public function deleteLevel($level_id)
    {
        $this->level_id = $level_id;
    }

    // destroy
    public function destroyLevel()
    {
        Level::findOrFail($this->level_id)->delete();
        session()->flash('message', 'Level Deleted Successfully');
        $this->dispatch('close-modal');  // untuk meghilangkan modal setelah dipencet
        $this->resetInput();
    }

    public function render()
    {
        $levels = Level::orderBy('id', 'ASC')->paginate(10);
        return view('livewire.admin.level-index', ['levels' => $levels])
            ->extends('layouts.admin')
            ->section('content');
    }
}

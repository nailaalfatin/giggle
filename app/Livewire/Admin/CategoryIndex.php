<?php

namespace App\Livewire\Admin;

use App\Models\Category;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithPagination;

class CategoryIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $category_id;

    //Proses untuk mendapatkan data yang akan dihapus
    public function deleteCategory($category_id) {
        // dd($category_id);
        $this->category_id = $category_id;
    }

    //Proses menghapus data
    public function destroyCategory() {
        $category = Category::find($this->category_id);
        // dd($category);

        //Untuk hapus image
        $path = 'upload/category/'.$category->image;
        if(File::exists($path)) {
            File::delete($path);
        }
        $category->delete();

        $this->dispatch('close-modal');
    }

    public function render()
    {
        $category =  Category::orderBy('id', 'ASC')->paginate(10);
        return view('livewire.admin.category-index', ['categories' => $category]);
    }
}

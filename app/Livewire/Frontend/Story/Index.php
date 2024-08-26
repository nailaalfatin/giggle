<?php

namespace App\Livewire\Frontend\Story;

use App\Models\Story;
use Livewire\Component;

class Index extends Component
{
    public $levels, $stories, $category, $levelInputs = [];

    protected $queryString = [
        'levelInputs' => ['except' => '', 'as' => 'level']
    ]; 

    public function mount($category) {
        $this->category = $category;
    }
    public function render()
    {
        $this->stories = Story::where('category_id', $this->category->id)
                            ->when($this->levelInputs, function($q) {
                                $q->whereHas('level', function($query) {
                                    $query->whereIn('name', $this->levelInputs);
                                });
                            })
                            ->get();

        return view('livewire.frontend.story.index', [
            'stories' => $this->stories,
            'category' => $this->category,
            'levels' => $this->levels,
        ]);
    }


    public function applyFilter()
    {
        $this->stories = Story::where('category_id', $this->category->id)
            ->when($this->levelInputs, function ($q) {
                $q->whereHas('level', function($query) {
                    $query->whereIn('name', $this->levelInputs);
                });
            })
            ->get();
    }
}



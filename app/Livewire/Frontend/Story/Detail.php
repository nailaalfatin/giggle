<?php

namespace App\Livewire\Frontend\Story;

use Livewire\Component;

class Detail extends Component
{
    public $category;
    public $story;

    public function mount( $category, $story)
    {
        $this->category = $category;
        $this->story = $story;
    }

    public function render()
    {
        return view('livewire.frontend.story.detail', [
            'category' => $this->category,
            'story' => $this->story,
        ]);
    }
}
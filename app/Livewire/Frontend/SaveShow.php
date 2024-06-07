<?php

namespace App\Livewire\Frontend;

use App\Models\Story;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SaveShow extends Component
{
    public function render()
    {
        return view('livewire.frontend.save-story');
    }
}

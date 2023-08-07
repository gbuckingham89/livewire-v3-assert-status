<?php

namespace App\Livewire;

use Livewire\Component;

class CreatePost extends Component
{
    public function createPost()
    {
        abort(403);
    }

    public function render()
    {
        return '<div>Hello!</div>';
    }
}

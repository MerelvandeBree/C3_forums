<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowForums extends Component
{

    public function render()
    {
        $forums = ShowForums::all();

        return view('livewire.show-forums', compact('forums') );
    }


}

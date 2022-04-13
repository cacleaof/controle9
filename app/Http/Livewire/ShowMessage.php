<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowMessage extends Component
{
    public $message = 'Apenas um teste';
    
    public function render()
    {
        return view('livewire.show-message');
    }
}

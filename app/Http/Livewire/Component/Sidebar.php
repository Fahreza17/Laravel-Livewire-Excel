<?php

namespace App\Http\Livewire\Component;

use Livewire\Component;
use illuminate\Support\Facades\Auth;
use App\Models\User;

class Sidebar extends Component
{
    public function render()
    {
        return view('livewire.component.sidebar');
    }
}

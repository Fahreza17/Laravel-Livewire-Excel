<?php

namespace App\Http\Livewire\Component;

use App\Exports\BantuanExport;
use Livewire\Component;
use Maatwebsite\Excel\Facades\Excel;

class Export extends Component
{

    public function export() 
    {
        return Excel::download(new BantuanExport, 'bantuan.xlsx');
    }
    public function render()
    {
        return view('livewire.component.export');
    }
}

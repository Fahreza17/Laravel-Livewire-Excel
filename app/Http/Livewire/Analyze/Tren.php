<?php

namespace App\Http\Livewire\Analyze;

use Livewire\Component;
use App\Models\Bantuan_insentif;
use illuminate\Support\Facades\Auth;

class Tren extends Component
{
    public $tren = [];
    public $activity = [];

    public function mount(){
        $this->calculateTotal();
    }

    public function calculateTotal()
    {
        $userId = Auth::user()->id;

        $data = Bantuan_insentif::where('user_id', $userId)->pluck('total');

        $pt = Bantuan_insentif::where('user_id', $userId)->pluck('perguruan_tinggi');
        $kgt =  Bantuan_insentif::where('user_id', $userId)->pluck('nama_kegiatan');
        
        for ($i = 0; $i < count($data); $i++) {
            $this->activity[] = $kgt[$i];
            $this->tren[] = $data[$i] + $pt[$i];
        }
    }

    public function render()
    {
        return view('livewire.analyze.tren');
    }
}

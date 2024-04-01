<?php

namespace App\Http\Livewire\Analyze;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Bantuan_insentif;
use illuminate\Support\Facades\Auth;
use Flowframe\Trend\Trend;

class Tabel extends Component
{
    public $trendData;

    public function trend(){
        $trend = Trend::model(Bantuan_insentif::class)
        ->average('satuan_biaya'); // Hitung rata-rata biaya per kegiatan
    $this->trendData = $trend->trend();
    }
    
    public function render()
    {
        $userId = Auth::user()->id;

        return view('livewire.analyze.tabel', [
            'data'=> Bantuan_insentif::where('user_id', $userId)->latest()->get(),
            'trendData' => $this->trendData
        ]);
    }
}

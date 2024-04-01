<?php

namespace App\Http\Livewire\Analyze;

use Livewire\Component;
use App\Models\Bantuan_insentif;
use illuminate\Support\Facades\Auth;

class MitraComparision extends Component
{
    public $activity = [];
    public $in_kind = [];
    public $in_cash = [];
    public $showData = false;

    public function mount (){
        $this->getData();
    }

    public function getData(){

        $userId = Auth::user()->id;
        $this->in_kind[] = Bantuan_insentif::where("user_id", $userId)->pluck('mitra_in_kind');
        $this->in_cash[] = Bantuan_insentif::where("user_id", $userId)->pluck('mitra_in_cash');
        $this->activity[]=  Bantuan_insentif::where('user_id', $userId)->pluck('nama_kegiatan');
        
    }

    public function render()
    {
        return view('livewire.analyze.mitra-comparision');
    }
}

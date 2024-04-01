<?php

namespace App\Http\Livewire\Analyze;

use Livewire\Component;
use App\Models\Bantuan_insentif;
use illuminate\Support\Facades\Auth;

class MhsActivity extends Component
{

    public $activity = [];
    public $mhs = [];

    public function mount (){
        $this->getData();
    }
    public function getData(){

        $userId = Auth::user()->id;
        $this->mhs[] = Bantuan_insentif::where("user_id", $userId)->pluck('kuantitas_mhs');
        $this->activity[]=  Bantuan_insentif::where('user_id', $userId)->pluck('nama_kegiatan');
        
    }

    public function render()
    {
        return view('livewire.analyze.mhs-activity');
    }
}

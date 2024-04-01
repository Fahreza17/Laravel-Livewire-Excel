<?php

namespace App\Http\Livewire\Analyze;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Bantuan_insentif;

class Dashboard extends Component
{
    public $dataAvalaibel = true;

    public function render()
    {
        $userId = Auth::user()->id;
        $data = Bantuan_insentif::where('user_id', $userId)->get();

        if ($data->isEmpty()) {
            $this->dataAvailable = false;
        }
        return view('livewire.analyze.dashboard')->extends('layouts.app')->section('content');
    }
}

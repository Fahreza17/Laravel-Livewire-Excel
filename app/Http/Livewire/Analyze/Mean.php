<?php
namespace App\Http\Livewire\Analyze;

use Livewire\Component;
use App\Models\Bantuan_insentif;
use Illuminate\Support\Facades\Auth;

class Mean extends Component
{
    public $mean = [];
    public $checkboxes = [
        'satuan_biaya' => true,
        'matching_fund' => true,
        'mitra_in_cash' => true,
        'mitra_in_kind' => true,
        'perguruan_tinggi' => true,
        'total' => true,
    ];

    public function mount()
    {
        $this->calculateMean();
    }

    public function calculateMean()
    {
        $userId = Auth::user()->id;
        $data = Bantuan_insentif::where('user_id', $userId)->get();


        $selectedColumns = [];
        foreach ($this->checkboxes as $column => $isChecked) {
            if ($isChecked) {
                $selectedColumns[] = $column;
            }
        }

        foreach ($selectedColumns as $column) {
            $columnData = $data->pluck($column)->toArray();
            $this->mean[$column] = array_sum($columnData) / count($columnData);
        }
    }

    public function render()
    {
        return view('livewire.analyze.mean')->extends('layouts.app');
    }
}

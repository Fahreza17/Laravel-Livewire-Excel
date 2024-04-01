<?php

namespace App\Http\Livewire\Analyze;

use Livewire\Component;
use App\Models\Bantuan_insentif;
use Illuminate\Support\Facades\Auth;

class Median extends Component
{
    public $median = [];
    public $checkboxes = [
        'satuan_biaya' => true,
        'matching_fund' => true,
        'mitra_in_cash' => true,
        'mitra_in_kind' => true,
        'perguruan_tinggi' => true,
        'total' => true,
    ];

    public function mount(){
        $this->calculateMedian();
    }


    public function calculateMedian()
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
            sort($columnData);
            $count = count($columnData);
            $middle = (int) floor($count / 2);
            $this->median[$column] = ($count % 2 == 0) ? ($columnData[$middle - 1] + $columnData[$middle]) / 2 : $columnData[$middle];
        }
    }

    public function render()
    {
        return view('livewire.analyze.median');
    }
}

<?php

namespace App\Http\Livewire\Analyze;

use Livewire\Component;
use App\Models\Bantuan_insentif;
use Illuminate\Support\Facades\Auth;

class Deviation extends Component
{
    public $deviation = [];
    public $checkboxes = [
        'satuan_biaya' => true,
        'matching_fund' => true,
        'mitra_in_cash' => true,
        'mitra_in_kind' => true,
        'perguruan_tinggi' => true,
        'total' => true,
    ];

    public function mount(){
        $this->calculateDeviation();
    }


    public function calculateDeviation()
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

            $mean = array_sum($columnData) / count($columnData);
            $variance = array_sum(array_map('self::square', $columnData)) / count($columnData) - $mean ** 2;

            $this->deviation[$column] = sqrt($variance);
        }
    }

    private static function square($number)
    {
        return $number ** 2;
    }

    public function render()
    {
        return view('livewire.analyze.deviation');
    }
}

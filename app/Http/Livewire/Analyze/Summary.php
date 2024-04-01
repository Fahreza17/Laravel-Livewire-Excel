<?php

namespace App\Http\Livewire\Analyze;

use Livewire\Component;
use App\Models\Bantuan_insentif;

class Summary extends Component
{
    public $mean = [];
    public $median = [];
    public $standardDeviation = [];
    // public $selectedAnalysis = 'mean';
    public $checkboxes = [
        'satuan_biaya' => false,
        'matching_fund' => false,
        'mitra_in_cash' => false,
        'mitra_in_kind' => false,
        'perguruan_tinggi' => false,
        'total' => false,
    ];

    public function toggleCheckbox($column)
    {
        $status = $this->checkboxes[$column] = !$this->checkboxes[$column];
        $this->calculateSummaryStatistics();
    }

    public function toggleAnalysis($type)
{
    $this->selectedAnalysis = $type;
    $this->calculateSummaryStatistics();
}

public function calculateSummaryStatistics()
{
    $data = Bantuan_insentif::all();
    
    $selectedColumns = [];
    foreach ($this->checkboxes as $column => $isChecked) {
        if ($isChecked) {
            $selectedColumns[] = $column;
        }
    }
    
    foreach ($selectedColumns as $column) {
        $columnData = $data->pluck($column)->toArray();
        
        // Berdasarkan jenis analisis yang dipilih
        switch ($this->selectedAnalysis) {
            case 'mean':
                $this->mean[$column] = $this->calculateMean($columnData);
                break;
            case 'median':
                $this->median[$column] = $this->calculateMedian($columnData);
                break;
            case 'standard_deviation':
                $this->standardDeviation[$column] = $this->calculateStandardDeviation($columnData);
                break;
        }
    }
}

    public function calculateMean($data)
    {
        return array_sum($data) / count($data);
    }

    public function calculateMedian($data)
    {
        sort($data);
        $count = count($data);
        $middle = (int) floor($count / 2);

        return ($count % 2 == 0) ? ($data[$middle - 1] + $data[$middle]) / 2 : $data[$middle];
    }

    public function calculateStandardDeviation($data)
    {
        $mean = array_sum($data) / count($data);
        $variance = array_sum(array_map('self::square', $data)) / count($data) - $mean ** 2;

        return sqrt($variance);
    }

    private static function square($number)
    {
        return $number ** 2;
    }

    public function render()
    {
        return view('livewire.analyze.summary');
    }
}

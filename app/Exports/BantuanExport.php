<?php

namespace App\Exports;

use App\Models\Bantuan_insentif;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\Schema;
use Maatwebsite\Excel\Concerns\Exportable;

class BantuanExport implements FromCollection,WithHeadings
{
    public function headings(): array{
        return [
            '#',
            'User',
            'Date',
        ];
    }
    public function collection()
    {
        return Bantuan_insentif::all();
        
    }
}

<?php

namespace App\Imports;

use App\Models\Bantuan_insentif;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use illuminate\Support\Facades\Auth;

class BantuanImport implements ToModel, WithHeadingRow, WithCalculatedFormulas,SkipsEmptyRows
{
    public function model(array $row)
    {
        $userId = Auth::user()->id;

        return new Bantuan_insentif([
            'user_id' => $userId,
            'nomor' => $row[0],
            'aktivitas' => $row[1],
            'nama_kegiatan' => $row[2],
            'tempat' => $row[3],
            'komponent' => $row[4],
            'unit' => $row[5],
            'kuantitas_mhs' => $row[6],
            'satuan_biaya' => $row[7],
            'matching_fund' => $row[8],
            'mitra_in_cash' => $row['in_cash'],
            'mitra_in_kind' => $row['in_kind'],
            'perguruan_tinggi' => $row[11],
            'total' => $row[12],
        ]);
    }

    public function headingRow(): int
    {
        return 5;
    }
}

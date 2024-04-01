<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bantuan_insentif extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nomor',
        'aktivitas',
        'nama_kegiatan',
        'tempat',
        'komponent',
        'unit',
        'kuantitas_mhs',
        'satuan_biaya',
        'matching_fund',
        'mitra_in_cash',
        'mitra_in_kind',
        'perguruan_tinggi',
        'total',
    ];    
}

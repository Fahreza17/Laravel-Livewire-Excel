<?php

namespace App\Http\Livewire\Component;

use Livewire\Component;
use Livewire\WithFileUploads;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\BantuanImport;
use App\Models\Bantuan_insentif;
use illuminate\Support\Facades\Auth;

class FileUpload extends Component
{
    use WithFileUploads;

    public $excelFile;

    public function upload()
    {
        $userId = Auth::user()->id;

        Bantuan_insentif::where('user_id', $userId)->delete();
        $this->validate([
            'excelFile' => 'required|mimes:xls,xlsx|max:2048'
        ]);

        $filePath = $this->excelFile->store('uploads', 'public');

        Excel::import(new BantuanImport, storage_path('app/public/' . $filePath));

        session()->flash('message', 'Excel file uploaded successfully.');

        $this->reset('excelFile');
    }
    public function render()
    {
        return view('livewire.component.file-upload')->extends('layouts.app')->section('content');
    }
}

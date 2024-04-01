<?php

use App\Http\Livewire\Analyze\Tabel;
use App\Http\Livewire\Component\Export;
use App\Http\Livewire\Component\FileUpload;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Analyze\Dashboard;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Auth\Login;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'welcome')->name('home');

Route::middleware('guest')->group(function () {
    Route::get('/register', Register::class)->name('register');
    Route::get('/login', Login::class)->name('login');
});

Route::middleware('auth')->group(function(){
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/upload', FileUpload::class)->name('dashboard');
    Route::get('/tabel', Tabel::class);
    Route::get('/export', Export::class);
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\KritikSaranController;
use App\Models\Wisata;

Route::get('/',[Controller::class, 'show_data'])->name('show_data');
Route::get('/wisata/{id}', [Controller::class, 'show_detail_wisata'])->name('show_detail_wisata');

Route::get('/wisata', [WisataController::class, 'wisata'])->name('wisata');
Route::get('/wisata/{id}', [WisataController::class, 'show_detail_wisata'])->name('show_detail_wisata');        

Route::get('/galeri', [GaleriController::class, 'galeri'])->name('galeri');     

Route::get('/kontak', [KritikSaranController::class, 'kontak'])->name('kontak');
Route::post('/kontak', [KritikSaranController::class, 'insertData'])->name('insertData');

Route::get('/about', function () {
    return view('public/aboutus');
});

Route::get('/mobileapp', function () {
    return view('public/mobileapp');
});
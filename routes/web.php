<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;

Route::controller(DosenController::class)->group(function () {
    Route::get('/insert_dsn', 'insert');
    Route::get('/select_dsn', 'select');
    Route::get('/update_dsn', 'update');
    Route::get('/delete_dsn', 'delete');
});

Route::controller(MatakuliahController::class)->group(function () {
    Route::get('/insert_mk', 'insert');
    Route::get('/select_mk', 'select');
    Route::get('/update_mk', 'update');
    Route::get('/delete_mk', 'delete');
});

Route::controller(MahasiswaController::class)->group(function () {
    Route::get('/insert_mhs', 'insert');
    Route::get('/select_mhs', 'select');
    Route::get('/update_mhs', 'update');
    Route::get('/delete_mhs', 'delete');
});

Route::redirect ('/','/dosen');
Route::get('/dosen', function(){
    $dosens = ["Dadang Yusup, M.Kom.","Purwantoro, M.Kom.","Ultach Enri, M.Kom.","Susilawati, M.Si.",
    "Aji Primajaya, S.Si., M.Kom.","Adhi Rizal, S.Pd., M.T.","Intan Purnamasari, M.Kom.
    ","M. Jajuli, M.Si.","Tesa Nur Padilah, M.Sc.","Kamal Prihandani, M.Kom."];
    return view('dosen.index', [
        'dosens' => $dosens
    ]);
})->name('dosen.index');
    
Route::get('/mahasiswa', function(){
    $mahasiswas = ["Amanda Febrianti","Octavia Salwa Dzaky Fadhillah","Fauzan Arista Alamsyah","Zidan Arrofi","Fanny Suyantoputri","Tegar Pramudya","Wanda Taufik Ramdhan",
    "Salma Haya Amalia","Yahya Aiman","Sylfia Putri"];
    return view('mahasiswa.index', [
        'mahasiswas' => $mahasiswas
    ]);
})->name('mahasiswa.index');
    
Route::get('/matakuliah', function(){
    $matakuliahs = ["Metode Numerik","Jaringan Komputer","Basis Data",
    "Kalkulus","Kecerdasan Buatan","Pemrograman Berbasis Web","Pengantar Teknologi dan Informasi","Data Mining","Blockchain","Framework Berbasis Web"];
    return view('matakuliah.index', [
        'matakuliahs' => $matakuliahs
    ]);
})->name('matakuliah.index');

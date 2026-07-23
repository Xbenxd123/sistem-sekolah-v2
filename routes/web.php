<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Manajemen Siswa (ActionController)
Route::name('students.')->prefix('students')->group(function () {
});

//Halaman Daftar Siswa
Route::get('/', [StudentController::class, 'index'])
->name('index');

//Halaman Detail Siswa
Route::get('/{id}', [StudentController::class, 'show'])
->name('show');

//Halaman Tambah Siswa
Route::get('/create', [StudentController::class, 'create'])
->name('create');

//Halaman Edit Siswa
Route::get('/{id}/edit', [StudentController::class, 'edit'])
->name('edit');

//Logika tambah siswa
Route::post('/', [StudentController::class, 'store'])
->name('store');

//Logika edit siswa
Route::put('/{id}', [StudentController::class, 'update'])
->name('update');

//Logika hapus siswa
Route::delete('/{id}', [StudentController::class, 'destroy'])
->name('destroy');

//Manajemen data guru (invokable)

Route::name('teachers.')->prefix('teachers')->group(function () {
        ->name('index');
});
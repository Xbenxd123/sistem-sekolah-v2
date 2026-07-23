<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return "Ini adalah alamat daftar siswa";
    }

    public function show(string $id)
    {
        return "Menampilkan detail siswa dengan ID: {$id}";
    }

    public function create()
    {
        return "Halaman untuk menambahkan siswa baru";
    }

    public function edit(string $id)
    {
        return "Halaman untuk mengedit siswa dengan ID: {$id}";
    }

    public function store()
    {
        return "menambahkan siswa baru ke database";
    }

    public function update(string $id)
    {
        return "Memperbarui data siswa dengan ID: {$id}";
    }

    public function destroy(string $id)
    {
        return "Menghapus data siswa dengan ID: {$id}";
    }

}

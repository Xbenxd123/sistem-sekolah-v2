<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        return "Menampilkan halaman daftar guru";
    }

    public function show(string $id)
    {
        return "Menampilkan guru dengan ID: {$id}";
    }

    public function create()
    {
        return "Menampilkan halaman tambah guru";
    }

    public function edit(string $id)
    {
        return "Menampilkan halaman edit guru ID: {$id}";
    }

    public function store()
    {
        return "Menambahkan penambahan data guru";
    }

    public function update(string $id)
    {
        return "Melakukan perubahan data guru ID: {$id}";
    }

    public function destroy(string $id)
    {
        return "Menghapus data guru ID: {$id}";
    }

}


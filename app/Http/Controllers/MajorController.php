<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Sistem Sekolah - Daftar Jurusan';
        $majors = [
        [
            'id' => 1,
            'code' => 'AKL',
            'name' => 'Akuntansi dan Keuangan Lembaga',
            'description' => 'Program keahlian yang membekali murid dengan kompetensi pencatatan dan pelaporan keuangan.',
        ],
        [
            'id' => 2,
            'code' => 'TKJ',
            'name' => 'Teknik Komputer dan Jaringan',
            'description' => 'Program keahlian yang membekali murid dengan kompetensi instalasi, konfigurasi, dan pemeliharaan jaringan komputer.',
        ],
        [
            'id' => 3,
            'code' => 'BD',
            'name' => 'Bisnis Digital',
            'description' => 'Program keahlian yang membekali murid dengan kompetensi pemasaran dan pengelolaan bisnis berbasis digital.',
        ],
        ];
        return view('majors.index', [
            'title' => $title,
            'majors' => $majors
        ]);
    }

     public function show(string $id)
    {
        $title = 'Sistem Sekolah - Menampilkan Detail Jurusan';
        return view('majors.show', [
            'title' => $title,
        ]);
    }

    public function create()
    {
        $title = 'Sistem Sekolah - Menambah Daftar Jurusan';
        return view('majors.create', [
            'title' => $title,
        ]);
    }

      public function edit(string $id)
    {
        $title = 'Sistem Sekolah - Mengubah Daftar Jurusan';
        return view('majors.edit', [
            'title' => $title,
        ]);
    }

    public function store(Request $request)
    {
        return "menambah data jurusan";
    }
  
    public function update(Request $request, string $id)
    {
        return "memperbarui data jurusan dengan ID: {$id}";
    }


    public function destroy(string $id)
    {
        return "menghapus data jurusan dengan ID: {$id}";
    }
}
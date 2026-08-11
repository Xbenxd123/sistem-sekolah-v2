<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $title = 'Sistem Sekolah - Daftar Siswa';
        $students = [
            [
                'id' => 1,
                'nis' => '1001',
                'name' => 'Budi Ariyanto',
                'class' => 'XII TKJ 2',
                'major'=> 'TKJ'
            ],
            [
                'id' => 2,
                'nis' => '1002',
                'name' => 'Luis',
                'class' => 'XII TKJ 2',
                'major'=> 'TKJ'
            ]
        ];
        return view('students.index', [
            'title' => $title,
            'students' => $students
        ]);
    }

    public function show(string $id)
    {
        $title = 'Sistem Sekolah - Menampilkan Detail Siswa';
        return view('students.show', [
            'title' => $title,
        ]);
    }

    public function create()
    {
        $title = 'Sistem Sekolah - Menambah Daftar Siswa';
        return view('students.create', [
            'title' => $title,
        ]);
    }

    public function edit(string $id)
    {
        $title = 'Sistem Sekolah - Mengubah Daftar Siswa';
        return view('students.edit', [
            'title' => $title,
        ]);
    } 

    public function store()
    {
        return "melakukkan penambahan data siswa";
    }

    public function update(string $id)
    {
        return "Melakukkan perubahan data siswa {$id}";
    }

    public function destroy(string $id)
    {
        return "Menghapus data siswa {$id}";
    }


}
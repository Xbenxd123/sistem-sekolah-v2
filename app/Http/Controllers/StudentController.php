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
                'name' => 'Biduk biduk dam dam',
                'class' => 'XII TKJ 2',
                'major' => 'TKJ',
            ],
            [
                'id' => 2,
                'nis' => '1002',
                'name' => 'Buahaha Santi',
                'class' => 'XII TKJ 1',
                'major' => 'TKJ',
            ]
        ];

        return view('students.index', [
            'title' => $title,
            'students' => $students
        ]);
    }

    public function show(string $id)
    {
        return view('students.show');
    }

    public function create()
    {
        return view('students.create');
    }
    

     public function edit(string $id)
    {
        return view('students.edit');
    }

    public function store()
    {
        return "Menambahkan penambahan data siswa";
    }

    public function update(string $id)
    {
        return "Melakukan perubahan data siswa {$id}";
    }

    public function destroy(string $id)
    {
        return "Menghapus data siswa {$id}";
    }

}

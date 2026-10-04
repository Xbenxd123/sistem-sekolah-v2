<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Student\StoreRequest;
use App\Http\Requests\Student\UpdateRequest;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $title = 'Sistem Sekolah - Daftar Siswa';
        $students = Student::select('id', 'nis', 'name', 'class', 'major')
        ->get();
        

        return view('students.index', [
            'title' => $title,
            'students' => $students
        ]);
    }

    public function show(Student $student)
    {
        $title = 'Sistem Sekolah - Menampilkan Detail Siswa';
        
        return view('students.show', [
            'title' => $title,
            'student' => $student
        ]);
    }

    public function create()
    {
        $title = 'Sistem Sekolah - Menambah Daftar Siswa';
        return view('students.create', [
            'title' => $title,
        ]);
    }

    public function edit(Student $student, Request $request)
    {
        $title = 'Sistem Sekolah - Mengubah Daftar Siswa';
        return view('students.edit', [
            'title' => $title,
            'student' => $student
        ]);
    } 

    public function store(StoreRequest $request)
    {
        //Validasi
        $validatedRequest = $request->validated();

        //Tambahkan data ke database
        Student::create($validatedRequest);

        //Handle if success
        return redirect()->route('students.index');
    }

    public function update(Student $student, UpdateRequest $request)
    {
        $validatedRequest = $request->validated();

        $student->update($validatedRequest);

        return redirect()->route('students.index');
    }

    public function destroy(student $student)
    {
        $student->delete();

        return redirect()->route('students.index');
    }

}
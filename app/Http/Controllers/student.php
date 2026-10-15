<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


#[fillable('nis', 'name', 'gender', 'major_id', 'class_id', 'user_id')]
#[table('students')]
class student extends Controller
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function major()
    {
        return $this->belongsTo(Major::class, 'major_id', 'id');
    }

    public function schoolClass()
    {
        return $this->belongsTo(SchoolClass::class, 'class_id', 'id');
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'student_subject', 'student_id', 'subject_id');
    }
}

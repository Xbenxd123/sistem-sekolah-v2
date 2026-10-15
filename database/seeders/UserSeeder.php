<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userTeacherEmail = 'Evie@ski.sch.id';
        $userStudentEmail = 'Luis@ski.sch.id';

        // User Teacher
        User::updateOrCreate(
            ['email' => $userTeacherEmail],
            [
                'name' => 'Evie',
                'password' => bcrypt('password'),
                'role' => 'teacher',
            ]
        );

        // User Student
        User::updateOrCreate(
            ['email' => $userStudentEmail],
            [
                'name' => 'Luis',
                'password' => bcrypt('password'),
                'role' => 'student',
            ]
        );
    }
}

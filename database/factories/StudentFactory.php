<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Student>
 */
class StudentFactory extends Factory
{
    protected $model = Student::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'nis' => fake()->unique()->numerify('100##'),
        'name' => fake()->name(),
        'gender' => fake()->randomElement(['Laki-laki', 'Perempuan']),
        'class' => fake()->randomElement(['X AKL', 'XI AKL', 'X BiD 1', 'X BiD 2', 'XII AKL', 'XII TKJ 1', 'XII TKJ 2']),
        'major' => fake()->randomElement(['AKL', 'TKJ', 'BiD']),
        ];
    }
}

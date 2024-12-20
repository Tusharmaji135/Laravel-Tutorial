<?php

namespace Database\Seeders;

use App\Models\student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File as FacadesFile;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //file 
        $json = FacadesFile::get(path: 'database/json/students.json');

        //collections 
        $students = collect(json_decode($json));

        //loop through students
        $students->each(function ($student) {
            student::create([
                'name' => $student->name,
                'email' => $student->email
            ]);
        });

        //fakeer
        // for ($i = 0; $i < 10; $i++) {
        //     student::create([
        //         'name' => fake()->name(),
        //         'email' => fake()->unique()->email()
        //     ]);
        // }


    }
}

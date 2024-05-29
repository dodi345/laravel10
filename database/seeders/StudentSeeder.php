<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = [
            [
                'name' => 'Dodi Sopandi',
                'nim' => '10109016',
                'kelas_id' => '1',
                'semester_id' => '4',
                'prodi_id' => '1',
                'major_id' => '1',
            ]
        ];
        foreach($students as $student){
            Student::insert([
                'uuid' => uuid_create(),
                'name' => $student['name'],
                'nim' => $student['nim'],
                'kelas_id' => $student['kelas_id'],
                'semester_id' => $student['semester_id'],
                'prodi_id' => $student['prodi_id'],
                'major_id' => $student['major_id'],
            ]);
        }
    }
}

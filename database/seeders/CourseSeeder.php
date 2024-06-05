<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            [
                'uuid' => uuid_create(),
                'code' => 'MKW001',
                'name' => 'Pemrograman Web',
                'semester_id' => '4',
                'kelas_id' => '4',
                'prodi_id' => '3'
            ],
            [
                'uuid' => uuid_create(),
                'code' => 'MKW002',
                'name' => 'Data Warehouse',
                'semester_id' => '3',
                'kelas_id' => '5',
                'prodi_id' => '3'
            ],
        ];
        foreach($courses as $course){
            Course::insert($course);
        }
    }
}

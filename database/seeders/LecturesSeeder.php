<?php

namespace Database\Seeders;

use App\Models\Lecturer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LecturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lectures = [
            [
                'name' => 'Jayadi',
                'nidn' => '12345673',
                'course_id' => '1',
                'prodi_id' => '2',
                'major_id' => '3'
            ],
        ];
        foreach($lectures as $lecture){
            Lecturer::insert([
                'uuid' => uuid_create(),
                'name' => $lecture['name'],
                'nidn' => $lecture['nidn'],
                'course_id' => $lecture['course_id'],
                'prodi_id' => $lecture['prodi_id'],
                'major_id' => $lecture['major_id'],

            ]);
        }
    }
}

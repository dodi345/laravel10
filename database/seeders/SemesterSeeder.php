<?php

namespace Database\Seeders;

use App\Models\Semester;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $semesters = [
            [
                'semester' => '1'
            ],
            [
                'semester' => '2'
            ],
            [
                'semester' => '3'
            ],
            [
                'semester' => '4'
            ],
            [
                'semester' => '5'
            ],
            [
                'semester' => '6'
            ],
            [
                'semester' => '7'
            ],
            [
                'semester' => '8'
            ]
        ];

        foreach($semesters as $semester){
            Semester::insert($semester);
        }
    }
}

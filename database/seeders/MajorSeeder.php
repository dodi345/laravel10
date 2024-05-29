<?php

namespace Database\Seeders;

use App\Models\Major;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $majors = [
            [
                'name' => 'Teknologi Informasi dan Komputer'
            ],
            [
                'name' => 'Pertanian'
            ],
            [
                'name' => 'Kesehatan'
            ],
            [
                'name' => 'Teknik Mesin'
            ],
            [
                'name' => 'Teknik Nuklir'
            ],
        ];
        foreach ($majors as $major) {
            Major::insert($major);
        }
    }
}

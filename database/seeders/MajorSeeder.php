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
                'uuid' => uuid_create(),
                'name' => 'Teknologi Informasi dan Komputer'
            ],
            [
                'uuid' => uuid_create(),
                'name' => 'Pertanian'
            ],
            [
                'uuid' => uuid_create(),
                'name' => 'Kesehatan'
            ],
            [
                'uuid' => uuid_create(),
                'name' => 'Teknik Mesin'
            ],
            [
                'uuid' => uuid_create(),
                'name' => 'Teknik Nuklir'
            ],
        ];
        foreach ($majors as $major) {
            Major::insert($major);
        }
    }
}

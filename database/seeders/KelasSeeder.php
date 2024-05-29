<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $class = [
            [
                'kelas' => '1A'
            ],
            [
                'kelas' => '1B'
            ],
            [
                'kelas' => '1C'
            ],
            [
                'kelas' => '2A'
            ],
            [
                'kelas' => '2B'
            ],
            [
                'kelas' => '2C'
            ],
            [
                'kelas' => '3A'
            ],
            [
                'kelas' => '3B'
            ],
            [
                'kelas' => '3C'
            ]
        ];
        foreach ($class as $kelas){
            Kelas::insert($kelas);
        }
    }
}

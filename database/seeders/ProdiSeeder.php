<?php

namespace Database\Seeders;

use App\Models\Prodi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $prodis = [
            [
                'uuid' => uuid_create(),
                'name' => 'Sistem Informasi',
                'jenjang' => 'D3',
                'major_id' => '1'
            ],
            [
                'uuid' => uuid_create(),
                'name' => 'Teknologi Rekayasa Perangkat Lunak',
                'jenjang' => 'D4',
                'major_id' => '1'
            ],
            [
                'uuid' => uuid_create(),
                'name' => 'Agroindustri',
                'jenjang' => 'D3',
                'major_id' => '2'
            ],
            [
                'uuid' => uuid_create(),
                'name' => 'Teknologi Produksi Tanaman Pangan',
                'jenjang' => 'D4',
                'major_id' => '2'
            ],
            [
                'uuid' => uuid_create(),
                'name' => 'Keperawatan',
                'jenjang' => 'D3',
                'major_id' => '3'
            ],
            [
                'uuid' => uuid_create(),
                'name' => 'Teknik Perawatan dan Perbaikan Mesin ',
                'jenjang' => 'D3',
                'major_id' => '4'
            ],
            [
                'uuid' => uuid_create(),
                'name' => 'Teknologi Rekayasa Manufaktur',
                'jenjang' => 'D4',
                'major_id' => '4'
            ],
        ];
        foreach($prodis as $prodi){
            Prodi::insert($prodi);
        }
    }
}

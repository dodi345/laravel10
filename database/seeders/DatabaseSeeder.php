<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Dosen;
use App\Models\DosenMatkul;
use App\Models\Matkul;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Dosen::factory(10)->create();
    //     Matkul::create([
    //         'dosen_id' => '1',
    //         'kode_matkul' => 'MKW001',
    //         'nama_matkul' => 'Project 2',
    //         'sks' => '4 SKS',
    //         'jenis_matkul' => 'MKW'
    //     ]);
    //     Matkul::create([
    //         'dosen_id' => '2',
    //         'kode_matkul' => 'MKW002',
    //         'nama_matkul' => 'Basis Data 2',
    //         'sks' => '4 SKS',
    //         'jenis_matkul' => 'MKW'
    //     ]);
    //     Matkul::create([
    //         'dosen_id' => '3',
    //         'kode_matkul' => 'MKU001',
    //         'nama_matkul' => 'Etika Profesi',
    //         'sks' => '2 SKS',
    //         'jenis_matkul' => 'MKU'
    //     ]);
    //     Matkul::create([
    //         'dosen_id' => '4',
    //         'kode_matkul' => 'MKU002',
    //         'nama_matkul' => 'Bahasa Inggris',
    //         'sks' => '2 SKS',
    //         'jenis_matkul' => 'MKU'
    //     ]);
    //     Matkul::create([
    //         'dosen_id' => '5',
    //         'kode_matkul' => 'MKW003',
    //         'nama_matkul' => 'APSI 1',
    //         'sks' => '4 SKS',
    //         'jenis_matkul' => 'MKW'
    //     ]);
    //     Matkul::create([
    //         'dosen_id' => '6',
    //         'kode_matkul' => 'MKU003',
    //         'nama_matkul' => 'Pendidikan Agama',
    //         'sks' => '2 SKS',
    //         'jenis_matkul' => 'MKU'
    //     ]);
    //     Matkul::create([
    //         'dosen_id' => '7',
    //         'kode_matkul' => 'MKW004',
    //         'nama_matkul' => 'Data Warehouse',
    //         'sks' => '4 SKS',
    //         'jenis_matkul' => 'MKW'
    //     ]);
    //     Matkul::create([
    //         'dosen_id' => '3',
    //         'kode_matkul' => 'MKU004',
    //         'nama_matkul' => 'Pemrograman WEB',
    //         'sks' => '6 SKS',
    //         'jenis_matkul' => 'MKU'
    //     ]);
    }
}

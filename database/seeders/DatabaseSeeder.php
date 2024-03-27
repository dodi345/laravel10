<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Dosen;
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

        Dosen::create([
            'nip'=> '10090290390',
            'nama' => 'Dodi Sopandi',
            'matkul' => 'Bahasa Alien',
            'image' => 'img/image.jpeg'
        ]);

        Dosen::create([
            'nip'=> '10090290391',
            'nama' => 'Jaja Miharja',
            'matkul' => 'Pemrograman Web',
            'image' => 'img/image.jpeg'
        ]);

        Dosen::create([
            'nip'=> '10090290392',
            'nama' => 'Kevin',
            'matkul' => 'Basis Data',
            'image' => 'img/image.jpeg'
        ]);
    }
}

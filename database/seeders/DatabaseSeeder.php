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
        $this->call([
            UserSeeder::class,
            MajorSeeder::class,
            ProdiSeeder::class,
            KelasSeeder::class,
            SemesterSeeder::class,
            CourseSeeder::class,
            StudentSeeder::class,
            LecturesSeeder::class,
            AcademcSeeder::class,
            ValueSeeder::class,
            DetailValueSeeder::class
        ]);

    }
}

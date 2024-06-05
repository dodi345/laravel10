<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Administrator',
                'username' => 'starboy79',
                'email' => 'dodisopandi@gmail.com',
                'password' => Hash::make('dodi123'),
                'role' => 'administrator',
            ],[
                'name' => 'Jayadi',
                'username' => 'starboy80',
                'email' => 'jayadi@gmail.com',
                'password' => Hash::make('jayadi123'),
                'role' => 'dosen',
            ],
            [
                'name' => 'Steven',
                'username' => 'starboy81',
                'email' => 'steven@gmail.com',
                'password' => Hash::make('steven123'),
                'role' => 'mahasiswa',
            ]

        ];
        foreach ($users as $user) {
            User::insert($user);
        }
    }
}

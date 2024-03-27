<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data =[
            [
                'username' => 'admin',
                'name' => 'Dodi Sopandi',
                'email' => 'sopandi@gmail.com',
                'password' => bcrypt('admin123'),
                'role' => 'admin'
            ],
            [
                'username' => 'user',
                'name' => 'Dodi ',
                'email' => 'sopandi@gmail.com',
                'password' => bcrypt('user1234'),
                'role' => 'user'
            ],
            ];
    }
}

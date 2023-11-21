<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert(
            [
                [
                    'name' => 'user1',
                    'email' => 'user1@gmail.com',
                    'password' => Hash::make('user123'),
                    'role' => 'user'
                ],
                [
                    'name' => 'user2',
                    'email' => 'user2@gmail.com',
                    'password' => Hash::make('user123'),
                    'role' => 'user'
                ],
                [
                    'name' => 'admin',
                    'email' => 'admin@gmail.com',
                    'password' => Hash::make('admin123'),
                    'role' => 'admin'
                ],
            ]
        );
    }
}

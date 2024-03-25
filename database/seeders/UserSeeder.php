<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Sample Dummy Users Array
        $users = [
            [
                'name' => 'Agusto Vercelli Dharma',
                'username' => 'verli',
                'role' => 'user',
                'email' => 'agusto@gmail.com',
                'password' => Hash::make('12345')
            ],
            [
                'name' => 'Administrator',
                'username' => 'admin',
                'role' => 'admin',
                'email' => 'admin@administrator.com',
                'password' => Hash::make('admin123')
            ],
            [
                'name' => 'Adam Saputra',
                'username' => 'damtra',
                'role' => 'user',
                'email' => 'damtra@gmail.com',
                'password' => Hash::make('12345')
            ]
        ];

        // Looping and Inserting Array's Users into User Table
        foreach ($users as $user) {
            User::create($user);
        }
    }
}

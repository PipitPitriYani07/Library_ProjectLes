<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $dataSimpan = [
            'name' => 'Pipit',
            'email' => 'fpipit271@gmai.com',
            'role' => 'Pengelola',
            'jenis_kelamin' => 'Perempuan',
            'picture' => 'default.jpg',
            'password' => Hash::make('5335353535')
        ];

        User::create($dataSimpan);
    }
}

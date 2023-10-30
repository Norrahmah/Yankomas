<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate();
        User::create([
            'nama' => 'Admin',
            'level' => 'Warga',
            'email' => 'Admin@gmail.com',
            'password' => bcrypt('123'),
            'delstatus' => true,

        ]);
    }
}

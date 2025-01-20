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
        User::insert([
            [
                'name' => 'Ирина',
                'surname' => 'Шапочкина',
                'lastname' => 'Михайловна',
                'login' => 'adminka',
                'tel' => '89227517850',
                'role' => 'admin',
                'email' => 'admin@mail.ru',
                'password' => Hash::make('password'),
            ],
        ]);
    }
}

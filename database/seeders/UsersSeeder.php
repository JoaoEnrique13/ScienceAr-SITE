<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'João Enrique',
            'email' => 'joao@gmail.com',
            'password' => bcrypt('1234'),
        ]);

        User::create([
            'name' => 'Júlia',
            'email' => 'julia@gmail.com',
            'password' => bcrypt('1234'),
        ]);

        User::create([
            'name' => 'Sarah',
            'email' => 'sarah@gmail.com',
            'password' => bcrypt('1234'),
        ]);

        User::create([
            'name' => 'Clara',
            'email' => 'clara@gmail.com',
            'password' => bcrypt('1234'),
        ]);
    }
}

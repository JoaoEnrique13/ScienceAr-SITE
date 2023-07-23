<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Administrator;

class AdministratorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Administrator::create([
            'idUser' => 1,
        ]);

        Administrator::create([
            'idUser' => 2,
        ]);

        Administrator::create([
            'idUser' => 3,
        ]);
    }
}

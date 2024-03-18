<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RuoliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


    public function run()
    {
        Role::create([
            'id' => 1,
            'ruoli' => 'admin',
        ]);

        Role::create([
            'id' => 2,
            'ruoli' => 'user',
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeUserSeeder extends Seeder
{
    public function run()
    {
        DB::table('type_users')->insert([
            ['id' => 1, 'libelle' => 'administrateur'],
            ['id' => 2, 'libelle' => 'client'],
        ]);
    }
}

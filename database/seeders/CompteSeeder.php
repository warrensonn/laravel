<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompteSeeder extends Seeder
{
    public function run()
    {
        DB::table('comptes')->insert([
            ['id' => 1, 'name' => 'warren', 'login' => 'warren', 'pwd' => 'warren', 'address' => '28 route des Vallières', 'cp' => '78125', 'city' => 'Raizeux', 'mail' => 'warren@gmail.com', 'idTypeUser' => 2],
            ['id' => 2, 'name' => 'elsacd', 'login' => 'elsacdad', 'pwd' => 'elsa', 'address' => '81 route des chataigniers', 'cp' => '78320', 'city' => 'Levis saint Nom', 'mail' => 'cad.elsa@gmail.com', 'idTypeUser' => 1],
            ['id' => 3, 'name' => 'Linag', 'login' => 'linag75', 'pwd' => 'linagcl', 'address' => '25 route des coins', 'cp' => '75014', 'city' => 'Paris', 'mail' => 'linag@gmail.com', 'idTypeUser' => 2],
        ]);
    }
}

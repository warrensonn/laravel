<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContainsSeeder extends Seeder
{
    public function run()
    {
        DB::table('contains')->insert([
            ['idOrder' => 1, 'idProduct' => 12, 'quantity' => 2],
            ['idOrder' => 1, 'idProduct' => 3, 'quantity' => 1],
            ['idOrder' => 2, 'idProduct' => 7, 'quantity' => 1],
            ['idOrder' => 2, 'idProduct' => 5, 'quantity' => 3],
            ['idOrder' => 3, 'idProduct' => 8, 'quantity' => 2],
            ['idOrder' => 3, 'idProduct' => 11, 'quantity' => 4],
        ]);
    }
}

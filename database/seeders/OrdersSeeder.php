<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersSeeder extends Seeder
{
    public function run()
    {
        DB::table('orders')->insert([
            ['id' => 1, 'dateOrder' => '2024-03-27', 'idCompte' => 1, 'price' => 110],
            ['id' => 2, 'dateOrder' => '2024-03-27', 'idCompte' => 1, 'price' => 150],
            ['id' => 3, 'dateOrder' => '2024-03-27', 'idCompte' => 3, 'price' => 170],
        ]);
    }
}

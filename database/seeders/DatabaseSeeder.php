<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            TypeUserSeeder::class,
            ProductSeeder::class,
            CompteSeeder::class,
            OrdersSeeder::class,
            ContainsSeeder::class,
        ]);
    }
}

<?php 

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            ['id' => 1, 'description' => 'Bouquet de roses multicolores', 'price' => 58, 'image' => 'images/flowers/comores.gif', 'quantity' => 5],
            ['id' => 2, 'description' => 'Bouquet de roses rouges', 'price' => 50, 'image' => 'images/flowers/grenadines.gif', 'quantity' => 0],
            ['id' => 3, 'description' => 'Bouquet de roses jaunes', 'price' => 78, 'image' => 'images/flowers/mariejaune.gif', 'quantity' => 2],
            ['id' => 4, 'description' => 'Bouquet de petites roses jaunes', 'price' => 48, 'image' => 'images/flowers/mayotte.gif', 'quantity' => 3],
            ['id' => 5, 'description' => 'Fuseau de roses multicolores', 'price' => 63, 'image' => 'images/flowers/philippines.gif', 'quantity' => 3],
            ['id' => 6, 'description' => 'Petit bouquet de roses roses', 'price' => 43, 'image' => 'images/flowers/pakopoka.gif', 'quantity' => 0],
            ['id' => 7, 'description' => 'Panier de roses multicolores', 'price' => 78, 'image' => 'images/flowers/seychelles.gif', 'quantity' => 0],
            ['id' => 8, 'description' => 'Panier de fleurs variées', 'price' => 53, 'image' => 'images/flowers/aniwa.gif', 'quantity' => 2],
            ['id' => 9, 'description' => 'Coup de charme jaune', 'price' => 38, 'image' => 'images/flowers/kos.gif', 'quantity' => 2],
            ['id' => 10, 'description' => 'Bel arrangement de fleurs de saison', 'price' => 68, 'image' => 'images/flowers/loth.gif', 'quantity' => 2],
            ['id' => 11, 'description' => 'Coup de charme vert', 'price' => 41, 'image' => 'images/flowers/luzon.gif', 'quantity' => 2],
            ['id' => 12, 'description' => 'Très beau panier de fleurs précieuses', 'price' => 98, 'image' => 'images/flowers/makin.gif', 'quantity' => 2],
            ['id' => 13, 'description' => 'Bel assemblage de fleurs précieuses', 'price' => 68, 'image' => 'images/flowers/mosso.gif', 'quantity' => 2],
            ['id' => 14, 'description' => 'Présentation prestigieuse', 'price' => 128, 'image' => 'images/flowers/rawaki.gif', 'quantity' => 2],
            ['id' => 15, 'description' => 'Plante fleurie', 'price' => 43, 'image' => 'images/flowers/antharium.gif', 'quantity' => 2],
            ['id' => 16, 'description' => 'Pot de phalaonopsis', 'price' => 58, 'image' => 'images/flowers/galante.gif', 'quantity' => 2],
            ['id' => 17, 'description' => 'Assemblage paysagé', 'price' => 103, 'image' => 'images/flowers/lifou.gif', 'quantity' => 2],
            ['id' => 18, 'description' => 'Belle coupe de plantes blanches', 'price' => 128, 'image' => 'images/flowers/losloque.gif', 'quantity' => 2],
            ['id' => 19, 'description' => 'Pot de mitonia mauve', 'price' => 83, 'image' => 'images/flowers/papouasi.gif', 'quantity' => 2],
            ['id' => 20, 'description' => 'Pot de phalaonopsis blanc', 'price' => 58, 'image' => 'images/flowers/pionosa.gif', 'quantity' => 2],
            ['id' => 21, 'description' => 'Pot de phalaonopsis rose mauve', 'price' => 58, 'image' => 'images/flowers/sabana.gif', 'quantity' => 2],
        ]);
    }
}

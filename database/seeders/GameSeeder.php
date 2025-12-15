<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Game;
use App\Models\Product;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $ml = Game::create([
            'name' => 'Mobile Legends',
            'publisher' => 'Moonton',
            'description' => 'Game MOBA populer di mobile.',
            'image' => 'img/game/ML.png'
        ]);

        Product::create([
            'game_id' => $ml->id,
            'name' => 'Diamond 86',
            'price' => 20000
        ]);
        Product::create([
            'game_id' => $ml->id,
            'name' => 'Diamond 172',
            'price' => 40000
        ]);



    }
}

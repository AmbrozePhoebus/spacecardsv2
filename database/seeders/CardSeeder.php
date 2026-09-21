<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Card;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Card::create([
            'name' => 'Aurora',
            'category' => 'Spaceships',
            'description' => 'A research vessel designed for long journeys through deep space.',
        ]);

        Card::create([
            'name' => 'Iron Wrench',
            'category' => 'Spaceships',
            'description' => 'A repair ship built to keep damaged spacecraft operational.',
        ]);

        Card::create([
            'name' => 'Star Hauler',
            'category' => 'Spaceships',
            'description' => 'A large cargo vessel used to transport supplies between planets.',
        ]);

        Card::create([
            'name' => 'Pathfinder',
            'category' => 'Spaceships',
            'description' => 'An exploration ship designed to chart unknown regions of space.',
        ]);

        Card::create([
            'name' => 'Asteria',
            'category' => 'Planets',
            'description' => 'An ocean-covered planet scattered with large chains of islands.',
        ]);

        Card::create([
            'name' => 'Veyra',
            'category' => 'Planets',
            'description' => 'A dry desert planet rich in valuable mineral deposits.',
        ]);

        Card::create([
            'name' => 'Nox',
            'category' => 'Planets',
            'description' => 'A cold and dark planet that receives very little sunlight.',
        ]);

        Card::create([
            'name' => 'Solara',
            'category' => 'Planets',
            'description' => 'A temperate planet with conditions suitable for life.',
        ]);

        Card::create([
            'name' => 'Wormhole',
            'category' => 'Space Events',
            'description' => 'A strange distortion in space that can connect distant locations.',
        ]);

        Card::create([
            'name' => 'Black Hole',
            'category' => 'Space Events',
            'description' => 'An extremely dense region of space with gravity strong enough to trap light.',
        ]);

        Card::create([
            'name' => 'Supernova',
            'category' => 'Space Events',
            'description' => 'A powerful stellar explosion that releases enormous amounts of energy.',
        ]);

        Card::create([
            'name' => 'Dwarf Star',
            'category' => 'Space Events',
            'description' => 'A small, relatively faint star that can remain stable for a very long time.',
        ]);
    }
}

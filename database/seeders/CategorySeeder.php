<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name' => 'Food',
                'description' => 'Delicious food for everyone',
                'image' => 'food.jpg',
            ],
            [
                'name' => 'Drinks',
                'description' => 'Refreshing drinks to quench your thirst',
                'image' => 'drinks.jpg',
            ],
        ]);
    }
}

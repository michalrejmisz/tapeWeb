<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name' => 'Taśma pakowa']);
        Category::create(['name' => 'Taśma z nadrukiem']);
        Category::create(['name' => 'Taśma magazynowa']);
        Category::create(['name' => 'Taśma ostrzegawcza']);
        Category::create(['name' => 'Taśma specjalistyczna']);
        Category::create(['name' => 'Folia Stretch']);
        Category::create(['name' => 'Aplikatory']);
    }
}

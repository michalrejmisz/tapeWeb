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
        Category::create(['name_pl' => 'Taśma pakowa', 'name_en' => 'Packaging Tape']);
        Category::create(['name_pl' => 'Taśma z nadrukiem', 'name_en' => 'Printed Tape']);
        Category::create(['name_pl' => 'Taśma magazynowa', 'name_en' => 'Stock Tape']);
        Category::create(['name_pl' => 'Taśma ostrzegawcza', 'name_en' => 'Caution Tape']);
        Category::create(['name_pl' => 'Taśma specjalistyczna', 'name_en' => 'Specialist Tape']);
        Category::create(['name_pl' => 'Folia Stretch', 'name_en' => 'Stretch Wrap']);
        Category::create(['name_pl' => 'Aplikatory', 'name_en' => 'Applicators']);
    }
}

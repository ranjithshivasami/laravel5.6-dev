<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Category::create([
            'name' => 'News'
        ]);
        App\Category::create([
            'name' => 'Videos'
        ]);
        App\Category::create([
            'name' => 'Discussion'
        ]);
        App\Category::create([
            'name' => 'Tutorials'
        ]);
        App\Category::create([
            'name' => 'Newsletter'
        ]);
    }
}

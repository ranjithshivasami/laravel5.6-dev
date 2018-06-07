<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Tag::create([
            'tag' => 'CMS'
        ]);
        App\Tag::create([
            'tag' => 'Framework'
        ]);
        App\Tag::create([
            'tag' => 'Database'
        ]);
    }
}

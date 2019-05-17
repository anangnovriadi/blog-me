<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'name' => Str::random(10),
            'category_id' => 1,
            'description' => Str::random(40),
            'tag' => Str::random(4),
            'image_thumb' => Str::random(10),
            'author' => Str::random(5)
        ]);
    }
}

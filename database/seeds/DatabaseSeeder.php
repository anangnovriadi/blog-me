<?php

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
        $this->call(CategoriesTableSeeder::class);
        
        for($i = 0; $i < 20; $i++) {
            $this->call(PostsTableSeeder::class);
        }
    }
}

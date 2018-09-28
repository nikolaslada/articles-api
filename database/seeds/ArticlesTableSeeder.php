<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{

    public function run(): void
    {
        factory(App\Article::class, 5)->create();
    }
}

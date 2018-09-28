<?php

use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{

    public function run(): void
    {
        factory(App\Article::class, 1)->create();
    }
}

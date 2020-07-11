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
        $this->call(UserSeeder::class);
        $this->command->info('User table seeded!');

        $this->call(ArticleSeeder::class);
        $this->command->info('Article table seeded!');

        $users = App\User::all();

        App\Article::all()->each(function ($article) use ($users) {
            $article->users()->attach(
                $users->random(rand(1,3))->pluck('id')->toArray()
            );
        });
        $this->command->info('Article-User pivot table seeded!');
    }
}

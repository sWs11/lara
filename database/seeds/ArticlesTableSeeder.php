<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Article;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($i = 0; $i < 20; $i++) {
            $article = new Article();

            $title = $faker->sentence();
            $article_text = $faker->realText(5000);

            $article->title = $title;
            $article->text = $article_text;
            $article->desc = substr($article_text, 0,150);
            $article->alias = urlencode($title);
            $article->img = $faker->image('public\images'. DIRECTORY_SEPARATOR .'articles', 1200, 720);
            $article->user_id = $faker->numberBetween(1, 10);
            $article->category_id = $faker->numberBetween(1, 7);

            $article->save();
        }
    }
}

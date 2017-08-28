<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($i = 1; $i < 8; $i++) {

            $category = new Category();

            $title = $faker->sentence();

            $category->title = $title;
            $category->alias = urlencode($title);
            if ($i != 1) {
                $category->parent_id = $faker->optional(0.8)->numberBetween(1, $i-1);
            } else {
                $category->parent_id = null;
            }

            $category->save();
        }
    }
}

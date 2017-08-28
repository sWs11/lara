<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Factory;

class IndexController extends Controller
{
    //
    public function index () {
        $faker = Factory::create();

        $user_name = $faker->realText(30,1);

//        $image = $faker->image('images'. DIRECTORY_SEPARATOR .'articles', 1200, 720);

        echo $faker->numberBetween(1, 10);
    }
}

<?php

use Illuminate\Database\Seeder;
use Faker\Factory;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($i = 0; $i < 7; $i++) {
            $name = $faker->unique()->userName;
            $email = $faker->unique()->safeEmail;

            DB::table('users')->insert([
                'name' => $name,
                'email' => $email,
                'password' => bcrypt($name),
            ]);
        }


    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class Post extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $faker = Faker::create();
        foreach (range(1, 500) as $index) {
            DB::table('posts')->insert([
                'user_id' => rand(1,100),
                'title' => $faker->text()
            ]);
        }
    }
}

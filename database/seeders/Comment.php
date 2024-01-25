<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class Comment extends Seeder
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
            DB::table('comments')->insert([
                'user_id' => rand(1,100),
                'post_id' => rand(1,500),
                'comment' => $faker->text()
            ]);
        }
    }
}

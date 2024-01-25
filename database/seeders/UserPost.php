<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UserPost extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 100) as $index) {
            DB::table('phones')->insert([
                'user_id' => rand(1,100),
                'phone_number' => $faker->phoneNumber()
            ]);
        }
    }
}

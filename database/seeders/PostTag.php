<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PostTag extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1, 100) as $index) {
            DB::table('post_tag')->insert([
                'post_id' => rand(1,500),
                'tag_id' => rand(1,20),
            ]);
        }
    }
}

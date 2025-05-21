<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class RateSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('rates')->insert([
            ['id' => 11, 'user_id' => 3, 'product_id' => 2, 'star_value' => 3, 'created_at' => null, 'updated_at' => null],
            ['id' => 15, 'user_id' => 5, 'product_id' => 2, 'star_value' => 2, 'created_at' => null, 'updated_at' => null],
            ['id' => 16, 'user_id' => 3, 'product_id' => 6, 'star_value' => 5, 'created_at' => null, 'updated_at' => null],
            ['id' => 17, 'user_id' => 3, 'product_id' => 4, 'star_value' => 3, 'created_at' => null, 'updated_at' => null],
            ['id' => 18, 'user_id' => 3, 'product_id' => 5, 'star_value' => 3, 'created_at' => null, 'updated_at' => null],
            ['id' => 19, 'user_id' => 3, 'product_id' => 1, 'star_value' => 4, 'created_at' => null, 'updated_at' => null],
            ['id' => 20, 'user_id' => 3, 'product_id' => 3, 'star_value' => 3, 'created_at' => null, 'updated_at' => null],
            ['id' => 21, 'user_id' => 3, 'product_id' => 11, 'star_value' => 3, 'created_at' => null, 'updated_at' => null],
        ]);
    }
}
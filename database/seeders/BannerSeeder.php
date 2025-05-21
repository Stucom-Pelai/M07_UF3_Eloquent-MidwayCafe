<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class BannerSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('banners')->insert([
            ['id' => 1, 'image' => 'slide-01.jpg', 'created_at' => null, 'updated_at' => null],
            ['id' => 2, 'image' => 'slide-02.jpg', 'created_at' => null, 'updated_at' => null],
            ['id' => 3, 'image' => 'slide-03.jpg', 'created_at' => null, 'updated_at' => null],
        ]);
    }
}
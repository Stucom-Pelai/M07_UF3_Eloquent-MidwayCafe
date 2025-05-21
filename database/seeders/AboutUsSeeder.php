<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class AboutUsSeeder extends Seeder
{
    public function run()
    {
        DB::table('about_us')->insert([
            [
                'id' => 1,
                'title' => 'We Leave A Delicious Memory For You',
                'description' => 'Midway Cafe is one of the best restaurant HTML templates with Bootstrap v4.5.2 CSS framework. You can download and feel free to use this website template layout for your restaurant business. You are allowed to use this template for commercial purposes. You are NOT allowed to redistribute the template ZIP file on any template donwnload website. Please contact us for more information.',
                'image1' => 'about-thumb-01.jpg',
                'image2' => 'about-thumb-02.jpg',
                'image3' => 'about-thumb-03.jpg',
                'youtube_link' => 'https://www.youtube.com/embed/eMF9tfxigGw',
                'vd_image' => 'about-video-bg.jpg',
                'created_at' => null,
                'updated_at' => null,
            ],
        ]);
    }
}
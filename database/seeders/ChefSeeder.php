<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ChefSeeder extends Seeder
{
    public function run()
    {
        DB::table('chefs')->insert([
            [
                'id' => 1,
                'name' => 'Randy Walker',
                'job_title' => 'Pastry Chef',
                'image' => 'chefs-01.jpg',
                'facebook_link' => 'https://www.facebook.com/',
                'twitter_link' => 'https://twitter.com/?lang=en',
                'instragram_link' => 'https://www.instagram.com/',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 2,
                'name' => 'David Martin',
                'job_title' => 'Cookie Chef',
                'image' => 'chefs-02.jpg',
                'facebook_link' => 'https://www.facebook.com/',
                'twitter_link' => 'https://twitter.com/?lang=en',
                'instragram_link' => 'https://www.instagram.com/',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 3,
                'name' => 'Peter Perkson',
                'job_title' => 'Pancake Chef',
                'image' => 'chefs-03.jpg',
                'facebook_link' => 'https://www.facebook.com/',
                'twitter_link' => 'https://twitter.com/?lang=en',
                'instragram_link' => 'https://www.instagram.com/',
                'created_at' => null,
                'updated_at' => null,
            ],
        ]);
    }
}
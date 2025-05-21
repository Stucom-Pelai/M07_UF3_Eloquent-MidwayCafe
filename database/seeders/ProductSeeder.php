<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'id' => 1,
                'name' => 'Chocolate Cake',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.',
                'image' => 'menu-item-01.jpg',
                'price' => '220',
                'catagory' => 'regular',
                'session' => 0,
                'available' => 'Stock',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 2,
                'name' => 'Klassy Pancake',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.',
                'image' => 'menu-item-02.jpg',
                'price' => '450',
                'catagory' => 'regular',
                'session' => 0,
                'available' => 'Stock',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 3,
                'name' => 'Blueberry Cake',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.',
                'image' => 'menu-item-04.jpg',
                'price' => '650',
                'catagory' => 'regular',
                'session' => 0,
                'available' => 'Out Of Stock',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 4,
                'name' => 'Klassy Cup Cake',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.',
                'image' => '733624453.jpg',
                'price' => '80',
                'catagory' => 'regular',
                'session' => 0,
                'available' => 'Stock',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 5,
                'name' => 'Fresh Chicken Salad',
                'description' => 'Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.',
                'image' => 'tab-item-01.png',
                'price' => '320',
                'catagory' => 'special',
                'session' => 0,
                'available' => 'Out Of Stock',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 6,
                'name' => 'Eggs Omelette',
                'description' => 'Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.',
                'image' => 'tab-item-04.png',
                'price' => '25',
                'catagory' => 'special',
                'session' => 0,
                'available' => 'Out Of Stock',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 7,
                'name' => 'Orange Juice',
                'description' => 'Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.',
                'image' => 'tab-item-02.png',
                'price' => '90',
                'catagory' => 'special',
                'session' => 1,
                'available' => 'Out Of Stock',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 8,
                'name' => 'Dollma Pire',
                'description' => 'Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.',
                'image' => 'tab-item-05.png',
                'price' => '190',
                'catagory' => 'special',
                'session' => 2,
                'available' => 'Out Of Stock',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 11,
                'name' => 'Pastry Cake',
                'description' => 'Delicious cake consisting of a classic puff base, filled with whipped cream.',
                'image' => 'tab-item-06.png',
                'price' => '120',
                'catagory' => 'regular',
                'session' => 0,
                'available' => 'Stock',
                'created_at' => null,
                'updated_at' => null,
            ],
        ]);
    }
}

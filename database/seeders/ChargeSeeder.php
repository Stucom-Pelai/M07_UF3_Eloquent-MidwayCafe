<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ChargeSeeder extends Seeder
{
    public function run()
    {
        DB::table('charges')->insert([
            [
                'id' => 1,
                'name' => 'Shipping Charge',
                'price' => 30,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 5,
                'name' => 'VAT',
                'price' => 20,
                'created_at' => null,
                'updated_at' => null,
            ],
        ]);
    }
}
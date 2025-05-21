<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    public function run()
    {
        DB::table('orders')->insert([
            [
                'id' => 7,
                'name' => 'Customer Name',
                'email' => 'customer@mail.com',
                'phone' => '8801XXXXXXXXX',
                'amount' => 10,
                'address' => 'Customer Address',
                'status' => 'Pending',
                'transaction_id' => '6253289de6e6d',
                'currency' => 'BDT',
            ],
            [
                'id' => 8,
                'name' => 'Customer Name',
                'email' => 'customer@mail.com',
                'phone' => '8801XXXXXXXXX',
                'amount' => 10,
                'address' => 'Customer Address',
                'status' => 'Pending',
                'transaction_id' => '625328ad4732b',
                'currency' => 'BDT',
            ],
            // Añade aquí el resto de registros siguiendo este patrón
            // ...
            [
                'id' => 112,
                'name' => 'Sajeeb Chakraborty',
                'email' => 'sajeebcb.cseru@gmail.com',
                'phone' => '1554649447',
                'amount' => 280,
                'address' => null,
                'status' => 'Pending',
                'transaction_id' => '...',
                'currency' => 'BDT',
            ],
        ]);
    }
}
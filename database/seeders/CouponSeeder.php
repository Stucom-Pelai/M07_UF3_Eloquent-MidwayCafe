<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class CouponSeeder extends Seeder
{
    public function run()
    {
        DB::table('coupons')->insert([
            [
                'id' => 1,
                'name' => 'Eid Offer',
                'details' => 'For Eid 20% Discount',
                'code' => 'ED25',
                'percentage' => 20,
                'validate' => '2022-08-30',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 7,
                'name' => 'Eid offer 2',
                'details' => '25% offer',
                'code' => 'ED26',
                'percentage' => 25,
                'validate' => '2022-09-31',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 9,
                'name' => 'Tresna offer',
                'details' => 'NSDFKJNAJFNAKJF',
                'code' => 'ED60',
                'percentage' => 60,
                'validate' => '2022-08-31',
                'created_at' => null,
                'updated_at' => null,
            ],
        ]);
    }
}
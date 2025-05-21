<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ReservationSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('reservations')->insert([
            [
                'id' => 1,
                'name' => 'Sajeeb Chakraborty',
                'email' => 'sajeebchakraborty.cse2000@gmail.com',
                'phone' => '01824072334',
                'no_guest' => '7',
                'date' => '21.07.2022',
                'time' => 'Breakfast',
                'message' => 'rgrghrhre',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 2,
                'name' => 'Sajeeb Chakraborty',
                'email' => 'sajeebchakraborty.cse2000@gmail.com',
                'phone' => '01824072334',
                'no_guest' => '7',
                'date' => '27.07.2022',
                'time' => 'Breakfast',
                'message' => 'gegeg',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 3,
                'name' => 'Sajeeb Chakraborty',
                'email' => 'sajeebchakraborty.cse2000@gmail.com',
                'phone' => '01824072334',
                'no_guest' => '7',
                'date' => '28.07.2022',
                'time' => 'Lunch',
                'message' => 'dsvfdvb',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 4,
                'name' => 'Sajeeb Chakraborty',
                'email' => 'robincb.symphony@gmail.com',
                'phone' => '01824072334',
                'no_guest' => '7',
                'date' => '27.07.2022',
                'time' => 'Breakfast',
                'message' => 'ascasds',
                'created_at' => null,
                'updated_at' => null,
            ],
            // ...
            // Continúa hasta el registro 34:
            [
                'id' => 34,
                'name' => 'Tresna Rani',
                'email' => 'tresna312@gmail.com',
                'phone' => '01737336101',
                'no_guest' => '12',
                'date' => '28.08.2022',
                'time' => 'Lunch',
                'message' => 'poribash zeno cool thaka',
                'created_at' => null,
                'updated_at' => null,
            ],
        ]);
    }
}
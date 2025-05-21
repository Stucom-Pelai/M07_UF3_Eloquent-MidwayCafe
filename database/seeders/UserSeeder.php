<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'id' => 3,
                'name' => 'robin',
                'email' => 'robincb.symphony@gmail.com',
                'phone' => '01824072334',
                'salary' => 10000,
                'usertype' => '0',
                'email_verified_at' => null,
                'password' => Hash::make('12345678'),
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'remember_token' => '0dAZOIaT06cAyULOuzKBXC61XSUyOMMGXy801LDMdot5VpeYzfwPU5o2lUcC',
                'current_team_id' => null,
                'profile_photo_path' => null,
                'created_at' => '2022-07-24 06:56:10',
                'updated_at' => null,
            ],
            [
                'id' => 11,
                'name' => 'Sajeeb Chakraborty',
                'email' => 'sajeebcb.cseru@gmail.com',
                'phone' => '1554649447',
                'salary' => 90000,
                'usertype' => '1',
                'email_verified_at' => null,
                'password' => Hash::make('12345678'),
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'remember_token' => null,
                'current_team_id' => null,
                'profile_photo_path' => '1250259143.jpg',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 14,
                'name' => 'Sudarshan Chakraborty',
                'email' => 'sudarshan.symphony@gmail.com',
                'phone' => '01770277098',
                'salary' => 35000,
                'usertype' => '3',
                'email_verified_at' => null,
                'password' => Hash::make('12345678'),
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'remember_token' => null,
                'current_team_id' => null,
                'profile_photo_path' => '2023444275.jpg',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 18,
                'name' => 'Jakes',
                'email' => 'sajeebchakraborty.cse2000@gmail.com',
                'phone' => '01325040309',
                'salary' => 14000,
                'usertype' => '2',
                'email_verified_at' => null,
                'password' => Hash::make('12345678'),
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'remember_token' => null,
                'current_team_id' => null,
                'profile_photo_path' => '1266291463.jpg',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 19,
                'name' => 'Tresna Rani',
                'email' => 'tresna312@gmail.com',
                'phone' => '1737336069',
                'salary' => 250000,
                'usertype' => '1',
                'email_verified_at' => null,
                'password' => Hash::make('12345678'),
                'two_factor_secret' => null,
                'two_factor_recovery_codes' => null,
                'remember_token' => null,
                'current_team_id' => null,
                'profile_photo_path' => '900546987.png',
                'created_at' => null,
                'updated_at' => null,
            ],
        ]);
    }
}
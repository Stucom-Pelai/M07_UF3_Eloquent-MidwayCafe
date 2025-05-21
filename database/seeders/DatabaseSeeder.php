<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        {
            $this->call(AboutUsSeeder::class);
            $this->call(BannerSeeder::class);
            $this->call(ChargeSeeder::class);
            $this->call(ChefSeeder::class);
            $this->call(CouponSeeder::class);
            $this->call(OrderSeeder::class);
            $this->call(ProductSeeder::class);
            $this->call(ReservationSeeder::class);
            $this->call(UserSeeder::class);
            $this->call(RateSeeder::class);
            $this->call(CartSeeder::class);
        }
    }
}

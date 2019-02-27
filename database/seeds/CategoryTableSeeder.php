<?php

use Carbon\Carbon;
use App\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $now = Carbon::now()->toDateTimeString();

        Category::insert([
            ['name' => 'Inverters', 'slug' => 'inverters', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Kstar Inverters', 'slug' => 'kstar-inverters', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Solar MPPT', 'slug' => 'solar-mppt', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Home Solar System', 'slug' => 'home-solar-system', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Renewsys Solar Panels', 'slug' => 'renewsys-solar-panels', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Battery Chargers', 'slug' => 'battery-chargers', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Wind Turbine', 'slug' => 'wind-turbine', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Solar Monitors', 'slug' => 'solar-monitors', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Solar Pump', 'slug' => 'solar-pump', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Solar Boosters', 'slug' => 'solar-boosters', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Solar Protection', 'slug' => 'solar-protection', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Batteries', 'slug' => 'batteries', 'created_at' => $now, 'updated_at' => $now]
        ]);
    }
}

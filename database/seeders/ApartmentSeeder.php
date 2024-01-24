<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ApartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Define your real data for latitude and longitude
        $realData = [
            [
                'user_id' => "1",
                'lat' => 40.7128, // New York
                'lon' => -74.0060
            ],
            [
                'user_id' => "2",
                'lat' => 34.0522, // Los Angeles
                'lon' => -118.2437
            ],
            [
                'user_id' => "3",
                'lat' => 40.7128, // New York
                'lon' => -74.0060
            ],
            [
                'user_id' => "4",
                'lat' => 34.0522, // Los Angeles
                'lon' => -118.2437
            ],
            [
                'user_id' => "1",
                'lat' => 40.7128, // New York
                'lon' => -74.0060
            ],
            [
                'user_id' => "1",
                'lat' => 34.0522, // Los Angeles
                'lon' => -118.2437
            ],

        ];
        // Schema::disableForeignKeyConstraints();
        // Apartment::truncate();
        // Schema::enableForeignKeyConstraints();

        foreach ($realData as $data) {
            DB::table('apartments')->insert([
                'user_id' => $data['user_id'],
                'name' => $faker->word,
                'rooms' => $faker->numberBetween(1, 5),
                'beds' => $faker->numberBetween(1, 10),
                'bathrooms' => $faker->numberBetween(1, 3),
                'mq' => $faker->numberBetween(20, 200),
                'address' => $faker->address,
                'lat' => $data['lat'],
                'lon' => $data['lon'],
                'photo' => $faker->imageUrl(640, 480, 'apartments', true),
                'visible' => $faker->boolean,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

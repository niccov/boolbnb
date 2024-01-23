<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $faker = Faker::create();

        // Genera e inserisci 10 messaggi casuali
        for ($i = 0; $i < 10; $i++) {
            DB::table('messages')->insert([
                'name' => $faker->firstName,
                'lastname' => $faker->lastName,
                'email' => $faker->email,
                'text' => $faker->sentence,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        // Esempio di dati da inserire nella tabella
        // $messages = [
        //     [
        //         'name' => 'John',
        //         'lastname' => 'Doe',
        //         'email' => 'john.doe@example.com',
        //         'text' => 'Hello, this is a sample message.',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'name' => 'Jane',
        //         'lastname' => 'Doe',
        //         'email' => 'jane.doe@example.com',
        //         'text' => 'Another sample message.',
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],

        // ];

        // // Inserisci i dati nella tabella
        // DB::table('messages')->insert($messages);
    }
    }


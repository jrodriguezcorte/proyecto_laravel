<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard(); // Decirle a Eloquent que permita la inserción

        $faker = Faker\Factory::create();

        foreach (range(1, 20) as $index) {
            \App\User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => Hash::make($faker->word)
            ]);
        }
    }
}

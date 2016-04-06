<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard(); // Decirle a Eloquent que permita la inserción
        User::create([
           'username' => 'Foobar',
            'email' => 'foo@bar.com',
            'password' => Hash::make('1234')
        ]);

    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       User::create([
        'name' => 'Jorem Belen',
        'email' => 'jorembelen@gmail.com',
        'type' => 'admin',
        'password' => Hash::make('password'),
       ]);
    }
}

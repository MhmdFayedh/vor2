<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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

        //* Create Admin account
        \App\Models\User::create([
            'name' => 'محمد الفايض',
            'email' => 'mo@ex.com',
            'password' => 'Kikpwer123456$',
            'role' => 'admin',
        ]);

        // Create Requests and user for each request
        \App\Models\Request::factory(50)->create();

        \App\Models\User::factory(20)->create();
    }
}

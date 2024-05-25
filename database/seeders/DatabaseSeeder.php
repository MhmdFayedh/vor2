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

        //* Admins account
        \App\Models\User::create([
            'name' => 'محمد الشمري',
            'email' => 'am.alshammari@neogen.com',
            'password' => 'MohammedFayedh010101',
            'role' => 'admin',
        ]);

        \App\Models\User::create([
            'name' => 'محمد الزبني',
            'email' => 'am.alzubayni@neogen.com',
            'password' => 'MohammedFayedh010101',
            'role' => 'admin',
        ]);


        \App\Models\User::create([
            'name' => 'مشاعل',
            'email' => 'am.m@neogen.com',
            'password' => 'Mashael010101',
            'role' => 'admin',
        ]);

        //* Subervisor account
        \App\Models\User::create([
            'name' => 'محمد الشمري',
            'email' => 'sm.alshammari@neogen.com',
            'password' => 'MohammedFayedh010101',
            'role' => 'supervisor',
        ]);

        \App\Models\User::create([
            'name' => 'محمد الزبني',
            'email' => 'sm.alzubayni@neogen.com',
            'password' => 'MohammedFayedh010101',
            'role' => 'supervisor',
        ]);

        \App\Models\User::create([
            'name' => 'مشاعل',
            'email' => 'sm.m@neogen.com',
            'password' => 'Mashael010101',
            'role' => 'supervisor',
        ]);



        // Create Requests and user for each request
        \App\Models\Request::factory(50)->create();

        \App\Models\User::factory(20)->create();
    }
}

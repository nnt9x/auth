<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('users')->insert([
            'name' => 'Admin 1',
            'email' => 'admin1@gmail.com',
            'phone' => '92929282828',
            'address' => 'A17',
            'password' => Hash::make('bkacad123'),
            'role' => 'admin'
        ]);
        DB::table('users')->insert([
            'name' => 'Customer ',
            'email' => 'customer1@gmail.com',
            'phone' => '92929282829',
            'address' => 'A17',
            'password' => Hash::make('bkacad123'),
            'role' => 'customer'
        ]);
    }
}

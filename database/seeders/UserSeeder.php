<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'role_id' => 2,
            'name' => 'Ruslan',
            'email' => 'myadilbaev@gmail.com',
            'password' => Hash::make('secret')         
        ]);
        User::create([
            'role_id' => 1,
            'name' => 'Guest',
            'email' => 'guest@example.com',
            'password' => Hash::make('secret')         
        ]);
        User::create([
            'role_id' => 3,
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('secret')         
        ]);
        User::create([
            'role_id' => 4,
            'name' => 'Company',
            'email' => 'company@example.com',
            'password' => Hash::make('secret')         
        ]);
        User::create([
            'role_id' => 5,
            'name' => 'Agent',
            'email' => 'agetn@example.com',
            'password' => Hash::make('secret')         
        ]);
        User::create([
            'role_id' => 6,
            'name' => 'Driver',
            'email' => 'driver@example.com',
            'password' => Hash::make('secret')         
        ]);
    }
}

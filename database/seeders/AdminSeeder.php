<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'username' => 'admin',
            'phone' => '082360958400',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('Harrypotter123!'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'user',
            'username' => 'user',
            'phone' => '082312341234',
            'email' => 'user@gmail.com',
            'password' => bcrypt('Harrypotter123!'),
            'role' => 'user',
        ]);

        User::create([
            'name' => 'driver',
            'username' => 'driver',
            'phone' => '085212341234',
            'email' => 'driver@gmail.com',
            'password' => bcrypt('Harrypotter123!'),
            'role' => 'driver',
        ]);
    }
}

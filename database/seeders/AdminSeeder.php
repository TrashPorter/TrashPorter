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
            'password' => bcrypt('password'),
            'role' => 'admin',
        ])->assignRole('admin');

        User::create([
            'name' => fake()->name(),
            'username' => 'user1',
            'phone' => '082312341234',
            'email' => 'user@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'user',
        ])->assignRole('user');

        User::create([
            'name' => fake()->name(),
            'username' => 'user2',
            'phone' => '082312341233',
            'email' => 'user1@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'user',
        ])->assignRole('user');

        User::create([
            'name' => fake()->name(),
            'username' => 'user3',
            'phone' => '082312341232',
            'email' => 'user2@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'user',
        ])->assignRole('user');

        User::create([
            'name' => fake()->name(),
            'username' => 'user4',
            'phone' => '082312341231',
            'email' => 'user3@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'user',
        ])->assignRole('user');

        User::create([
            'name' => fake()->name(),
            'username' => 'user5',
            'phone' => '082312341230',
            'email' => 'user4@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'user',
        ])->assignRole('user');

        User::create([
            'name' => fake()->name(),
            'username' => 'user6',
            'phone' => '082312341239',
            'email' => 'user5@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'user',
        ])->assignRole('user');

        User::create([
            'name' => fake()->name(),
            'username' => 'driver1',
            'phone' => '085212341231',
            'email' => 'driver1@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'driver',
        ])->assignRole('driver');
        User::create([
            'name' => fake()->name(),
            'username' => 'driver2',
            'phone' => '085212341234',
            'email' => 'driver2@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'driver',
        ])->assignRole('driver');
    }
}

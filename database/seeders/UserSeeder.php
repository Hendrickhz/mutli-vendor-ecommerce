<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert(
            [[
                "name" => "Admin user",
                "username" => "adminUser",
                "email" => "admin@gmail.com",
                'password' => Hash::make('asdffdsa'),
                "role" => "admin",
                "status" => "active",
                "created_at" => now(),
                "updated_at" => now(),
            ],
                [
                    "name" => "vendor user",
                    "username" => "vendorUser",
                    "email" => "vendor@gmail.com",
                    'password' => Hash::make('asdffdsa'),
                    "role" => "vendor",
                    "status" => "active",
                    "created_at" => now(),
                    "updated_at" => now(),
                ],
                [
                    "name" => "user",
                    "username" => "user",
                    "email" => "user@gmail.com",
                    'password' => Hash::make('asdffdsa'),
                    "role" => "user",
                    "status" => "active",
                    "created_at" => now(),
                    "updated_at" => now(),
                ]]
        );
    }
}

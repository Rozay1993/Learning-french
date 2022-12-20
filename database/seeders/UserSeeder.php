<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            "username" => "Admin",
            "email" => getenv("ADMIN_MAIL"),
            'email_verified_at' => now(),
            "password" => Hash::make("admin"),
            "role" => 3,
            'remember_token' => Str::random(10),
        ]);
    }
}

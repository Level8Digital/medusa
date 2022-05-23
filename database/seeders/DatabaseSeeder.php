<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
     public function run()
     {
        $password = config('app.auth_pass');
         DB::table('users')->insert([
           'name' => 'Admin',
           'email' => 'shanks.matt.10@gmail.com',
           'email_verified_at' => now(),
           'password' => Hash::make($password), // password
           'created_at' => now()

         ]);
     }
}

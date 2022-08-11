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

         DB::table('purchases')->insert([
           'username' => 'Admin',
           'paid_at' => '2022-07-05',
           'username' => 'timmyt',
           'email' => 'timmty@email.com',
           'access' => 'three-month',
           'access_granted' => true,
           'confirm_tv' => true,
           'agree_terms' => true,
           'total' => 57.75,
           'payment_type' => 'PayPal',
           'is_paid' => true,
           'paid_total' => 57.75,
           'paypal_id' => 'sdfs4564gfdgdg',
           'expires_at' => '2022-08-05'
         ]);

         DB::table('purchases')->insert([
           'username' => 'Admin',
           'paid_at' => '2021-07-05',
           'username' => 'timmyt',
           'email' => 'timmty@email.com',
           'access' => 'three-month',
           'access_granted' => true,
           'confirm_tv' => true,
           'agree_terms' => true,
           'total' => 57.75,
           'payment_type' => 'PayPal',
           'is_paid' => true,
           'paid_total' => 57.75,
           'paypal_id' => 'sdfs4564gfdgdg',
           'expires_at' => '2021-08-05'
         ]);

     }
}

<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                'name'=>"admin",
                'email'=>"admin@gmail.com",
                'email_verified_at'=> now(),
                'password'=>Hash::make('admin'),
                // 'password'=>bcrypt("admin"),
                // 'remember_token' => 'hahaha',
            ]
        );
    }
}


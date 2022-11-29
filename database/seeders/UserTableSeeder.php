<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create user
        \DB::table('users')->insert(
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => now(),
                'password' =>bcrypt('admin')
            ]
        );
        // //Create user
        \DB::table('users')->insert(
            [
                'name' => 'usuario1',
                'email' => 'usuario1@gmail.com',
                'email_verified_at' => now(),
                'password' =>bcrypt('usuario1')
            ]
        );
    }
}

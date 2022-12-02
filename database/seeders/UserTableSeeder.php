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
        // // //Create user
        // \DB::table('users')->insert(
        //     [
        //         'name' => 'usuario1',
        //         'email' => 'usuario1@gmail.com',
        //         'email_verified_at' => now(),
        //         'password' =>bcrypt('usuario1')
        //     ]
        // );
        // //Create user
    //     \DB::table('users')->insert(
    //         [
    //             'name' => 'ismael',
    //             'email' => 'ismael@gmail.com',
    //             'email_verified_at' => now(),
    //             'password' =>bcrypt('ismael')
    //         ]
    //     );
    //     // //Create user
    //     \DB::table('users')->insert(
    //         [
    //             'name' => 'alexandre',
    //             'email' => 'alexandre@gmail.com',
    //             'email_verified_at' => now(),
    //             'password' =>bcrypt('alexandre')
    //         ]
    //     );
    //     // //Create user
    //     \DB::table('users')->insert(
    //         [
    //             'name' => 'cristian',
    //             'email' => 'cristian@gmail.com',
    //             'email_verified_at' => now(),
    //             'password' =>bcrypt('cristian')
    //         ]
    //     );
    //     // //Create user
    //     \DB::table('users')->insert(
    //         [
    //             'name' => 'chico',
    //             'email' => 'chico@gmail.com',
    //             'email_verified_at' => now(),
    //             'password' =>bcrypt('chico')
    //         ]
    //     );
    //     // //Create user
    //     \DB::table('users')->insert(
    //         [
    //             'name' => 'kamir',
    //             'email' => 'kamir@gmail.com',
    //             'email_verified_at' => now(),
    //             'password' =>bcrypt('kamir')
    //         ]
    //     );
    //     // //Create user
    //     \DB::table('users')->insert(
    //         [
    //             'name' => 'denis',
    //             'email' => 'denis@gmail.com',
    //             'email_verified_at' => now(),
    //             'password' =>bcrypt('denis')
    //         ]
    //     );
    //     // //Create user
    //     \DB::table('users')->insert(
    //         [
    //             'name' => 'alessandro',
    //             'email' => 'alessandro@gmail.com',
    //             'email_verified_at' => now(),
    //             'password' =>bcrypt('alessandro')
    //         ]
    //     );
    //     // //Create user
    //     \DB::table('users')->insert(
    //         [
    //             'name' => 'frota',
    //             'email' => 'frota@gmail.com',
    //             'email_verified_at' => now(),
    //             'password' =>bcrypt('frota')
    //         ]
    //     );
    }
}

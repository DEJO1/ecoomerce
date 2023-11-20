<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert(
            [
                'name' => 'Admin user',
                'username' => 'adminuser',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'status' => 'active',
                'password' => bcrypt('PASSWORD'),
            ],);
            DB::table('users')->insert(
            [
                'name' => 'user',
                'username' => 'user',
                'email' => 'usern@gmail.com',
                'role' => 'user',
                'status' => 'active',
                'password' => bcrypt('PASSWOR'),
            ],);
            DB::table('users')->insert(

            [
                'name' => 'vendor user',
                'username' => 'vendoruser',
                'email' => 'vendorn@gmail.com',
                'role' => 'vendor',
                'status' => 'active',
                'password' => bcrypt('PASSWOR'),
            ]);
    }
}

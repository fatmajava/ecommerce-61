<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        DB::table('users')->insert([
            'name' => 'Fatma Karam Hussein',
            'email' => 'fatma.karam@gmail.com',
            'password' => '123456789'
        ]);
        DB::table('users')->insert([
            'name' => 'Fatma',
            'email' => 'fatma@info.com',
            'password' => '123456789'
        ]);
        DB::table('users')->insert([
            'name' => 'Amany',
            'email' => 'amany@info.com',
            'password' => '123456789'
        ]);
        DB::table('users')->insert([
            'name' => 'Amany',
            'email' => 'amany@info.com',
            'password' => '123456789'
        ]);
    }
}

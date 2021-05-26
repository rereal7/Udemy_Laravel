<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
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
            [
            'name' => 'aaa',
            'email' => 'test@test.com',
            'password' => Hash::make('password123')
            ],
            [
            'name' => 'iii',
            'email' => 'test2@test.com',
            'password' => Hash::make('password123')
            ]
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'fname' => 'David',
        	'mname' => 'Roga',
        	'lname' => 'Mendoza',
        	'role' => 'Admin',
        	'email' => 'davidmendozaofficial@gmail.com',
        	'email_verified_at' => now()->toDateTimeString(),
        	'password' => Hash::make('123456'),
        	'created_at' => now()->toDateTimeString(),
        	'updated_at' => now()->toDateTimeString()
        ]);
    }
}

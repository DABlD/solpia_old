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
            'birthday' => '2018-11-12',
            'gender' => 'Male',
            'nationality' => 'Filipino',
            'address' => 'Rm. 628, Park Avenue Mansions, Pasay, Metro Manila',
            'contact' => '09154590172',
        	'email_verified_at' => now()->toDateTimeString(),
        	'password' => Hash::make('123456'),
        	'created_at' => now()->toDateTimeString(),
        	'updated_at' => now()->toDateTimeString()
        ]);
    }
}

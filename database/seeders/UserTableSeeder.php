<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         User::create([
       		'name'		=> 'Admin',
       		'email'		=> 'test@123.com',
       		'password'	=> Hash::make('Test123'),

       ]);
    }
}

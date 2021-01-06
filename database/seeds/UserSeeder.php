<?php

use Illuminate\Database\Seeder;

use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    User::create([
	        'name' => 'John Doe',
	        'email' => 'doejohn22@gmail.com',
	        'email_verified_at' => '01/01/1900',
	        'password' => 'abc321',
	        'role' => 'author',	
	        'remember_token' => 'qwerty123',
	        'created_at' => '2010-01-03',
	        'updated_at' => '2010-01-03',
	    ]);
    }
}

<?php

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
        $user = new App\User;
    	$user->name = 'admin';
    	$user->email = 'admin@admin.com';
    	$user->password = Hash::make('admin');
    	$user->save();
    }
}

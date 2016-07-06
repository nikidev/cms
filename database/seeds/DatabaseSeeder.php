php artisan db:seed<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'email' => 'admin@gmail.com',
            'username'=>'admin',
            'password' => bcrypt('pass'),
            'first_name'=>'Admin',
            'middle_name'=>'Admin',
            'last_name'=>'Admin',
            'is_admin'=>true
        ]);
    }
}
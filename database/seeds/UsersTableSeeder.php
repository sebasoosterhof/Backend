<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'user_firstname' => str_random(10),
            'user_lastname' => str_random(10),
            'user_email' => str_random(10).'@fcroc.nl',
            'user_password' => bcrypt('secret'),
        ]);
    }
}

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
            'name' => 'じぇに',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('4545'),
            'flag' => 1,
        ]);
    }
}

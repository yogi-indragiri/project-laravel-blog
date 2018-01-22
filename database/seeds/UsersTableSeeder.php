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
        App\User::create([
            'name' => 'Admin User',
            'email' => 'admin@devblog.com',
            'password' => bcrypt('12345678')
        ]);
    }
}

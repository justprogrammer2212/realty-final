<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345'),
            'role' => User::ROLE_ADMIN,
            'remember_token' => Str::random(20),
        ]);
        User::updateOrCreate([
            'name' => 'Tony Holland',
            'email' => 'tony_holland@gmail.com',
            'password' => bcrypt('12345'),
            'role' => User::ROLE_REALTOR,
            'remember_token' => Str::random(20),
        ]);
        User::updateOrCreate([
            'name' => 'Sasha Gordon',
            'email' => 'sasha_gordon@gmail.com',
            'password' => bcrypt('12345'),
            'role' => User::ROLE_REALTOR,
            'remember_token' => Str::random(20),
        ]);
        User::updateOrCreate([
            'name' => 'Nicky Butt',
            'email' => 'nicky_butt@gmail.com',
            'password' => bcrypt('12345'),
            'role' => User::ROLE_REALTOR,
            'remember_token' => Str::random(20),
        ]);
        User::updateOrCreate([
            'name' => 'Gina Wesley',
            'email' => 'gina_wesley@gmail.com',
            'password' => bcrypt('12345'),
            'role' => User::ROLE_REALTOR,
            'remember_token' => Str::random(20),
        ]);
        factory('App\User', 10)->create();
    }
}

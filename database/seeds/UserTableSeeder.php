<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::created([
            'name' => 'João',
            'email' => 'jvitornegri@gmail.com',
            'state' => 'São Paulo',
            'city' => 'Presidente Prudente',
            'password' => Hash::make('12345678')
        ]);
    }
}

<?php

use App\Role;
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

        $adminRole = Role::where('name', 'admin')->first();

        $admin = User::create([
            'name' => 'Admin User',
            'email' =>'admin@admin.com',
            'state' => 'São Paulo',
            'city' => 'Presidente Prudente',
            'password' => Hash::make('12345678')
        ]);

        $admin->roles()->attach($adminRole);

    }
}

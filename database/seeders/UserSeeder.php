<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'first_name' => 'Breksam',
            'last_name' => 'Hassan',
            'email' => 'breksamhassan@gmail.com',
            'password' => Hash::make('123456789'),
            'gender' => 'female',
            'birth_date' => '2000-01-17',
            'role' => 'admin',

        ]);

        $user->assignRole('admin');
    }
}

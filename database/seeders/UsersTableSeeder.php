<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'name'      => 'Gianlu',
                'email'     => 'gianlugiarde@gmail.com',
                'password'  => Hash::make('gianlu'),
            ],
        ];

        foreach ($users as $user_data) {
            User::create($user_data);
        }
    }
}
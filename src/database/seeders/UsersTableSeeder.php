<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Model\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::updateOrCreate(
            ['email' => 'admin@example.com'],
            [
                 'name'   =>'田中　太郎',
                 'password' => \Illuminate\Support\Facades\Hash::make('password123'),
            ]
        );

    
    }
}

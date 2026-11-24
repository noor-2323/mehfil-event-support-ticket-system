<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class StaffUserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'staff@mehfil.com'],
            [
                'name' => 'Mehfil Staff',
                'password' => Hash::make('Mehfil@123'),
            ]
        );
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'name' => 'Admin Desa Jetis Delanggu',
            'email' => 'desajetisdelanggu@gmail.com',
            'password' => Hash::make('jetisoke123'),
            'is_active' => true, 
        ]);
    }
}

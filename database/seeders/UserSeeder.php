<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "role_id"=>1,
            "name"=>"Manager",
            "email"=>"manage@company.com",
            "password"=>Hash::make('password')
        ]);
        User::create([
            "role_id"=>2,
            "name"=>"Example Client",
            "email"=>"client@company.com",
            "password"=>Hash::make('password')
        ]);
    }
}

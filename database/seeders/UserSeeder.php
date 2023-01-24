<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
//        User::where('id', 1)->updateOrCreate([
//                'name' => 'admin',
//                'email' => 'admin@hsys.com',
//                'password' => Hash::make('admin')
//        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $name = 'admin' .Str::random(5);
       $email = 'ma@example.com';
       $role = 1;

       DB::table('users')->insert ([
        [
            'name' => $name,
            'email' => $email,
            'role' => $role,
            'password' => Hash::make('magigante'),
            'remember_token' => NULL,
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ]);
    }
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Role::create([
            'role_name' => 'admin',
        ]);

        Role::create([
            'role_name' => 'petugas',
        ]);

        Role::create([
            'role_name' => 'peminjam',
        ]);

        User::create([
            'role_id' => 1,
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password') ,

        ]);
        User::create([
            'role_id' => 2,
            'name' => 'petugas',
            'email' => 'petugas@gmail.com',
            'password' => bcrypt('password') ,

        ]);
        User::create([
            'role_id' => 3,
            'name' => 'peminjam',
            'email' => 'peminjam@gmail.com',
            'password' => bcrypt('password') ,

        ]);
    }
}

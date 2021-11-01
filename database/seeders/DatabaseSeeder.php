<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        Role::create([
//            'role_nm' => 'Admin',
//        ]);
//
//        Role::create([
//            'role_nm' => 'Teacher',
//        ]);
//
//        Role::create([
//            'role_nm' => 'Student',
//        ]);
//
//        User::create([
//            'email' => 'javaughnbailey21@gmail.com',
//            'password' => bcrypt('password'),
//            'role_id' => 1,
//            'status' => 1,
//            'remember_token' => Str::random(),
//            'created_at' => now(),
//            'updated_at' => now()
//        ]);

        Student::factory(600)->create();
//         \App\Models\User::factory(3)->create();
    }
}

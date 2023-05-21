<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use DB;
use Sentinel;

class AdminSeeder extends DatabaseSeeder
{

    public function run()
    {
        DB::table('users')->truncate(); // Using truncate function so all info will be cleared when re-seeding.
        DB::table('roles')->truncate();
        DB::table('role_users')->truncate();
        DB::table('activations')->truncate();


        // create 2 users
        $admin = Sentinel::registerAndActivate([
            'email'       => 'admin@admin.com',
            'password'    => "admin",
            'first_name'  => 'John',
            'last_name'   => 'Doe',
        ]);
        $user = Sentinel::registerAndActivate([
            'email'       => 'user@user.com',
            'password'    => "user",
            'first_name'  => 'John',
            'last_name'   => 'Doe',
        ]);

        // create 2 roles
        $adminRole = Sentinel::getRoleRepository()->createModel()->create([
            'name' => 'Admin',
            'slug' => 'admin',
            'permissions' => ['admin' => 1]
        ]);

        $userRole = Sentinel::getRoleRepository()->createModel()->create([
            'name'  => 'User',
            'slug'  => 'user',
            'permissions' => ['user' => true]
        ]);

        // add user to user role and admin to admin role
        $user->roles()->attach($userRole);
        $admin->roles()->attach($adminRole);

        $this->command->info('Admin User created with username admin@admin.com and password admin');
    }
}

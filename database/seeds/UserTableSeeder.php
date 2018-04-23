<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin  = Role::where('name', 'admin')->first();
        $role_user = Role::where('name', 'user')->first();

        $admin = new User();
        $admin->name = 'Joe Bloggs';
        $admin->email = 'joe@bloggs.com';
        $admin->password = bcrypt('secret');
        $admin->is_admin = true;
        $admin->consent = true;
        $admin->save();
        $admin->roles()->attach($role_admin);

        $user = new User();
        $user->name = 'Mary Bloggs';
        $user->email = 'mary@bloggs.com';
        $user->password = bcrypt('secret');
        $user->is_admin = false;
        $user->consent = true;
        $user->save();
        $user->roles()->attach($role_user);


    }
}

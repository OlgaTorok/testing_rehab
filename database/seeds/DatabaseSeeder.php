<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Role comes before User seeder here.
       // $this->call(RoleTableSeeder::class);
        // User seeder will use the roles above created.
       // $this->call(UserTableSeeder::class);

       $role_user = new Role();
       $role_user->name = 'user';
       $role_user->description = 'A parent';
       $role_user->save();

       $role_admin = new Role();
       $role_admin->name = 'admin';
       $role_admin->description = 'A therapist';
       $role_admin->save();

       // $role_admin  = Role::where('name', 'admin')->first();
       // $role_user = Role::where('name', 'user')->first();

       $user = new User();
       $user->name = 'Mary Bloggs';
       $user->email = 'mary@bloggs.com';
       $user->password = bcrypt('secret');
       $user->is_admin = false;
       $user->consent = true;
       $user->save();
       $user->roles()->attach($role_user);

       $admin = new User();
       $admin->name = 'Joe Bloggs';
       $admin->email = 'joe@bloggs.com';
       $admin->password = bcrypt('secret');
       $admin->is_admin = true;
       $admin->consent = true;
       $admin->save();
       $admin->roles()->attach($role_admin);


    }
}

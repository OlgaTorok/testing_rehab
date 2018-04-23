<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;


class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $role_admin = new Role();
        $role_admin->name = 'admin';
        $role_admin->description = 'A therapist';
        $role_admin->save();

        $role_user = new Role();
        $role_user->name = 'user';
        $role_user->description = 'A parent';
        $role_user->save();


    }
}

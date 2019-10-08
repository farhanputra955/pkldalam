<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //membuat role admin
        $adminRole = new Role();
        $adminRole->name="admin";
        $adminRole->display_name="Admin";
        $adminRole->save();
        
        //membuat role member
        $memberRole = new Role();
        $memberRole->name="member";
        $memberRole->display_name="Member";
        $memberRole->save();

        //membuat sample admin
        $admin = new User();
        $admin->name='Admin';
        $admin->email='admin@gmail.com';
        $admin->password=bcrypt('admin123');
        $admin->save();
        //$admin->attachRole($adminRole);

        //membuat semple member
        $member = new User();
        $member->name=" Member";
        $member->email='member@gmail.com';
        $member->password=bcrypt('member123');
        $admin->save();
        //$admin->attachRole($memberRole);
    }
}

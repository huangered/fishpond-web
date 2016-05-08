<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use fishpond\User;
use fishpond\Profile;
use fishpond\Role;
use fishpond\Permission;

class PersonSeeder extends Seeder {
    public function run() {
        $user = User::create([
            'name' => 'admin',
            'email' => 'admin@fishpond.com',
            'password' => bcrypt('hy19880516'),
        ]);
        $profile=Profile::create([
            'name' => 'admin',
            'telephone' => '12345678',
            'location' => 'shanghai, china',
            'job' => 'it'
        ]);
        $user->profile()->save($profile);

        $owner = new Role();
        $owner->name         = 'owner';
        $owner->display_name = 'Project Owner'; // optional
        $owner->description  = 'User is the owner of a given project'; // optional
        $owner->save();

        $admin = new Role();
        $admin->name         = 'admin';
        $admin->display_name = 'User Administrator'; // optional
        $admin->description  = 'User is allowed to manage and edit other users'; // optional
        $admin->save();

        $user->attachRole($admin);
        $user->attachRole($owner);


    }
}
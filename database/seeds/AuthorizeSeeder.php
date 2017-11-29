<?php

use Illuminate\Database\Seeder;

class AuthorizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = [
			"slug" => "admin",
			"name" => "Admin",
			"permissions" => [
			"admin" => true
			]
		];

		Sentinel::getRoleRepository()->createModel()->fill($role_admin)->save();
		$adminrole = Sentinel::findRoleByName('Admin');
		$user_admin = ["email"=>"superuser@email.com", "password"=>"12345678"];
		$adminuser = Sentinel::registerAndActivate($user_admin);
		$adminuser->roles()->attach($adminrole);

		$role_pl = [
		"slug" => "pl",
		"name" => "Pl",
		"permissions" => [
		"datausers.index" => true,
		"datausers.create" => true,
		"datausers.store" => true,
		"datausers.show" => true,
		"datausers.edit" => true,
		"datausers.update" => true
			]
		];

		Sentinel::getRoleRepository()->createModel()->fill($role_pl)->save();
		$plrole = Sentinel::findRoleByName('Pl');
		$user_pl = ["email"=>"pl@email.com", "password"=>"12345678"];
		$pluser = Sentinel::registerAndActivate($user_pl);
		$pluser->roles()->attach($plrole);
    }
}

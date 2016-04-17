<?php

namespace fishpond\Http\Controllers;

use Illuminate\Http\Request;

use fishpond\Http\Requests;
use fishpond\Http\Requests\RoleFormRequest;
use fishpond\Http\Requests\PermissionFormRequest;
use fishpond\User;
use fishpond\Role;
use fishpond\Permission;

class AdminController extends Controller
{
	public function index(){
         $users = User::all();
         $roles = Role::all();
         $permissions = Permission::all();
         return view('admin.index')->with('users',$users)->with('roles',$roles)->with('permissions',$permissions);
	}

	public function storeRole(RoleFormRequest $req) {
		if (Auth::user()->hasRole('admin')) {
			$role = new Role(array(
				'name' => $req->get('name'),
				'display' => $req->get('display_name'),
				'description' => $req->get('description')));

			$role->save();
			return \Redirct::route('admin.index');
		}
	}

	public function storePermission(PermissionFormRequest $req) {
		if (Auth::user()->hasRole('admin')) {
			$permission = new Permission(array(
				'name' => $req->get('name'),
				'display_name' => $req->get('display_name'),
				'description' => $req->get('description')
			));
			$permission->save();
			return \Redirect::route('admin.index');
		}
	}
}

<?php

namespace App\Http\Controllers;

use Alert;
use App\Permission;
use App\Role;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UMSController extends Controller
{
    public function getAllUsers()
    {
        $users = User::paginate(15);

        return view('users.all-users', compact('users'));
    }

    public function getAddUser()
    {
        $users = User::latest()->take(3)->get();

        $roles = Role::lists('name', 'id')->all();

        return view('users.add-user', compact('users', 'roles'));
    }

    public function getAllRoles()
    {
        $roles = Role::all();

        return view('users.all-roles', compact('roles'));
    }

    public function getAllPermissions()
    {
        $permissions = Permission::all();

        return view('users.all-permissions', compact('permissions'));
    }
}

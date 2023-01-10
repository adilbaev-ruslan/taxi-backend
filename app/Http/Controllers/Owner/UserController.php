<?php

namespace App\Http\Controllers\owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('owner.users.index', compact('users'));
    }

    public function show(User $user){
        $roles = Role::all();
        $permissions = Permission::all();
        return view('owner.users.show', compact('user', 'roles', 'permissions'));
    }

    public function assignRole(Request $request, User $user){
        if($user->hasRole($request->role)){
            return back()->with('message', 'Role exists');
        }
        $user->assignRole($request->role);
        return back()->with('message', 'Role assigned');
    }

    public function removeRole(User $user, Role $role) {
        if($user->hasRole($role)){
            $user->removeRole($role);
            return back()->with('message', 'Role remove.');
        }
        return back()->with('message', 'Role does not exists');
    }

    public function givePermission(Request $request, User $user) {
        if($user->hasPermissionTo($request->permission)){
            return back()->with('message', 'Permission exists.');
        }
        $user->givePermissionTo($request->permission);
        return back()->with('message', 'Permission added.');
    }

    public function revokePermission(User $user, Permission $permission) {
        if($user->hasPermissionTo($permission)) {
            $user->revokePermissionTo($permission);
            return back()->with('message', 'Permission revoked.');
        }
        return back()->with('message', 'Permission does not exists');
    }

    public function destroy(User $user){
        if($user->hasRole('owner')){
            return back()->with('message', 'You are role owner.');
        }
        $user->delete();
        return back()->with('message', 'User deleted');
    }   

}
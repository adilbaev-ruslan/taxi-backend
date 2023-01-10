<?php

namespace App\Http\Controllers\owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Http\Requests\Owner\StorePermissionRequest;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissions = Permission::all(); 
        return view('owner.permissions.index', compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('owner.permissions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePermissionRequest $request)
    {
        Permission::create([
            'name' => $request->name,
        ]);

        return redirect()->route('owner.permissions.index')->with('message', 'Permission created successfuly.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Permission $permission)
    {
        $roles = Role::all();
        return view('owner.permissions.edit', compact('permission', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePermissionRequest $request, Permission $permission)
    {
        $permission->update([
            'name' => $request->name
        ]);
        return redirect()->route('owner.permissions.index')->with('message', 'Permission updated successfuly.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permission)
    {
        $permission->delete();
        return redirect()->route('owner.permissions.index')->with('message', 'Permission deleted');
    }

    public function assignRole(Request $request, Permission $permission){
        if($permission->hasRole($request->role)){
            return back()->with('message', 'Role exists');
        }
        $permission->assignRole($request->role);
        return back()->with('message', 'Role assigned');
    }

    public function removeRole(Permission $permission, Role $role) {
        if($permission->hasRole($role)){
            $permission->removeRole($role);
            return back()->with('message', 'Role remove.');
        }
        return back()->with('message', 'Role not exists');
    }

}

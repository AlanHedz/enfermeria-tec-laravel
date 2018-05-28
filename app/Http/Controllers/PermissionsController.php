<?php

namespace App\Http\Controllers;

use Caffeinated\Shinobi\Models\Permission;
use Illuminate\Http\Request;

class PermissionsController extends Controller
{
    public function index() 
    {
        $permissions = Permission::all();
        return view('permissions.index', ['permissions' => $permissions]);
    }

    public function create()
    {
        return view('permissions.create');
    }

    public function store(Request $request)
    {
        $permission = Permission::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description
        ]);
        return redirect()->route('permissions.index');
    }

    public function edit(Permission $permission)
    {
        return view('permissions.create', ['permission' => $permission]);
    }

    public function update(Request $request, Permission $permission)
    {
        $permission = Permission::update([
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description
        ]);
        return redirect()->route('permissions.index');
    }

    public function destroy(Permission $permission)
    {
        $permission->delete();
        return redirect()->route('permissions.index');
    }

}

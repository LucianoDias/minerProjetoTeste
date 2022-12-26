<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;

class RolesController extends Controller
{
    
    function __construct()
    {

    }
    
    public function index(Request $request)
    {   
        $roles = Role::orderBy('id','DESC')->paginate(5);
        return view('roles.index',compact('roles'))->with('i', ($request->input('page', 1) - 1) * 5);
    }
    
    public function create()
    {
        $permissions = Permission::get();
        return view('roles.create', compact('permissions'));
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:roles,name',
            'permission' => 'required',
        ]);
        $role = Role::create(['name' => $request->get('name')]);
        $role->syncPermissions($request->get('permission'));
        return redirect()->route('roles.index')->with('success','Regras criada com sucesso');
    }

    public function show(Role $role)
    {
        $role = $role;
        $rolePermissions = $role->permissions;
        return view('roles.show', compact('role', 'rolePermissions'));
    }
    
    public function edit(Role $role)
    {
        $role = $role;
        $rolePermissions = $role->permissions->pluck('name')->toArray();
        $permissions = Permission::get();
        return view('roles.edit', compact('role', 'rolePermissions', 'permissions'));
    }
    
    public function update(Role $role, Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'permission' => 'required',
        ]);
        $role->update($request->only('name'));
        $role->syncPermissions($request->get('permission'));
        return redirect()->route('roles.index')->with('success','Regra atualizada com sucesso');
    }

    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('roles.index') ->with('success','Regra deletada com sucesso');
    }
}
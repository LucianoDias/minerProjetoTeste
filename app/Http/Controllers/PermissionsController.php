<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;

class PermissionsController extends Controller
{
    public function index()
    {   
        $permissions = Permission::latest()->paginate(12);
        return view('permissions.index', ['permissions' => $permissions]);
    }

    public function create() { return view('permissions.create'); }

    public function store(Request $request)
    {   
        $request->validate(['name' => 'required|unique:users,name']);
        Permission::create($request->only('name'));
        return redirect()->route('permissions.index')->withSuccess(__('Permissão criada com sucesso.'));
    }

    public function edit(Permission $permission)
    {
        return view('permissions.edit', ['permission' => $permission]);
    }

    public function update(Request $request, Permission $permission)
    {
        $request->validate(['name' => 'required|unique:permissions,name,'.$permission->id]);
        $permission->update($request->only('name'));
        return redirect()->route('permissions.index')->withSuccess(__('Permissão atualizada com sucesso.'));
    }

    public function destroy(Permission $permission)
    {
        $permission->delete();
        return redirect()->route('permissions.index')->withSuccess(__('Permissão deletada com sucesso.'));
    }

}

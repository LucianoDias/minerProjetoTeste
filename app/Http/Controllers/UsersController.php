<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;

class UsersController extends Controller
{
    public function index() 
    {
        $users = User::latest()->paginate(10);
        return view('users.index', compact('users'));
    }

    public function create(){ return view('users.create'); }
      // method criar Usuário
    public function store(User $user, StoreUserRequest $request) 
    {
        // echo "<pre>";
        // print_r($request);exit;
        $user->create(array_merge($request->validated(), [
            'password' => '123456' 
        ]));
        return redirect()->route('users.index')->withSuccess(__('Usuário criado com sucesso.'));
    }
      // method  mostrar  Usuário
    public function show(User $user) 
    {
        return view('users.show', ['user' => $user ]);
    }
      // method  chmar a view edição 
    public function edit(User $user) 
    {
        return view('users.edit', [
            'user' => $user,
            'userRole' => $user->roles->pluck('name')->toArray(),
            'roles' => Role::latest()->get()
        ]);
    }
      // method  atualizar  Usuário
    public function update(User $user, UpdateUserRequest $request) 
    {
        $user->update($request->validated());
        $user->syncRoles($request->get('role'));
        return redirect()->route('users.index')->withSuccess(__('Usuário atualizado com sucesso.'));
    }
    // method  delete Usuário
    public function destroy(User $user) 
    {
        $user->delete();
        return redirect()->route('users.index')->withSuccess(__('Usuário excluido com sucesso.'));
    }
}

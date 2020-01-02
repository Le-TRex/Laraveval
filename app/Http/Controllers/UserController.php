<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use Validator;

class UserController extends Controller
{
    public function showUsers()
    {
        $users = User::All();
        return view ('users.show', compact ('users'));
    }

    public function create()
    {
        $roles = Role::All();
        return view ('users.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:20|string',
            'email' => 'required',
            'password' => 'required',
            'role_id' => 'required'
        ]);

        if($validator->fails()) {
            return redirect('createUser')
                ->withErrors($validator)
                ->withInput();
        }else{
            $user = new User ([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
                'role_id' => $request->role_id
            ]);
            $user->save();
            return redirect('/users');
        }
    }

    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::All();

        return view('users.edit', compact('user', 'roles'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->role_id = $request->role_id;
        $user->save();
        return redirect('/users');
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/users');
    }
}
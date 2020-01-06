<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use Validator;

class RoleController extends Controller
{
    public function showRoles()
    {
        $roles = Role::All();
        return view('roles.show', compact('roles'));
    }

    public function create()
    {
        return view ('roles.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|max:10|string'
        ]);

        if ($validator->fails()) {
            return redirect('createRole')
                ->withErrors($validator)
                ->withInput();
        }else{
            $role = new Role ([
                'name' => $request->name
            ]);
            $role->save();
            return redirect('/roles');
        }
    }

    public function edit($id)
    {
        $role = Role::find($id);
        return view('roles.edit', compact('role'));
    }

    public function update(Request $request, $id)
    {
        $role = Role::find($id);
        $role->name = $request->name;
        $role->save();
        return redirect('/roles');
    }

    public function delete($id)
    {
        $role = Role::find($id);
        $role->delete();
        return redirect ('/roles');
    }
}
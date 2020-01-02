<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Duck;
use App\Breed;
use Validator;

class DuckController extends Controller
{
    public function showDucks()
    {
        $ducks = Duck::All();
        return view('ducks.show', compact ('ducks'));
    }
    
    public function create()
    {
        $breeds = Breed::All();
        return view ('ducks.create', compact ('breeds'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:50|string',
            'gender' => 'required|max:1|string',
            'age' => 'required|integer|max:40|min:0',
            'breed_id' => 'required'
        ]);
    
        if ($validator->fails()) {
            return redirect('createDuck')
                ->withErrors($validator)
                ->withInput();
        }else{
            $duck = new Duck ([
                "name" => $request->name,
                "gender" => $request->gender,
                "age" => $request->age,
                "breed_id" => $request->breed_id
            ]);
            $duck->save();
            return redirect('/ducks');
        }
    }

    public function edit($id)
    {
        $duck = Duck::find($id);
        $breeds = Breed::All();
    
        return view('ducks.edit', compact('duck', 'breeds'));
    }

    public function update(Request $request, $id)
    {
        $duck = Duck::find($id);
        $duck->name = $request->name;
        $duck->gender = $request->gender;
        $duck->age = $request->age;
        $duck->breed_id = $request->breed_id;
        $duck->save();
        return redirect ('/ducks');
    }

    public function delete($id)
    {
        $duck = Duck::find($id);
        $duck->delete();
        return redirect ('/ducks');
    }
}
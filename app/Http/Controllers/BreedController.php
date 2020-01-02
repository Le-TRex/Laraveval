<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Breed;
use Validator;

class BreedController extends Controller
{
    public function showBreeds()
    {
        $breeds = Breed::All();
        return view('breeds.show', compact ('breeds'));
    }

    public function create()
    {
        return view ('breeds.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:50|string',
            'mainColor' => 'required|max:50|string'
        ]);

        if ($validator->fails()) {
            return redirect('createBreed')
                ->withErrors($validator)
                ->withInput();
        }else{
            $breed = new Breed ([
                "name" => $request->name,
                "mainColor" => $request->mainColor
            ]);
            $breed->save();
            return redirect('/breeds');
        }
    }

    public function edit($id)
    {
        $breed = Breed::find($id);

        return view('breeds.edit', compact('breed'));
    }

    public function update(Request $request, $id)
    {
        $breed = Breed::find($id);
        $breed->name = $request->name;
        $breed->mainColor = $request->mainColor;
        $breed->save();
        return redirect ('/breeds');
    }

    public function delete($id)
    {
        $breed = Breed::find($id);
        $breed->delete();
        return redirect ('/breeds');
    }
}
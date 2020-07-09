<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Animal;
use App\User;
use App\Role;
use App\Breed;
use Gate;
use Illuminate\Http\Request;

class AnimalUpdateController extends Controller
{


//    $animal = \App\Breed::all();
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function show($id){

        $image = "";

        if(\App\Animal::find($id)->image){
            $image = 'http://localhost/project/public/uploads/cats/'.\App\Animal::find($id)->image;
        }
        $data = [
          "animal" => \App\Animal::find($id),
          "breed" => \App\Breed::all(),
          "image" => $image
        ];
        return view('admin.users.update', $data);

    }

    public function update(Request $request){

        $data = request()->validate([

            'animal_name'=>'required|min:4',
            'description'=>'required|max:255',
            'neutered'=>'required|min:2|max:4',
            'gender'=>'required|min:6|max:7',
            'years'=>'required|numeric|min:1|max:20',
            'image'=>'required|max:10240'
        ]);


        $animal = \App\Animal::find($request->input('id'));

        if ($request->hasfile('image')){
            $file = $request->file('image');
            $extendion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extendion;
            $file->move('uploads/cats/', $filename);
            $animal->image=$filename;
        }

        $animal->animal_name = $request->input('animal_name');
        $animal->gender = $request->input('gender');
        $animal->neutered = $request->input('neutered');
        $animal->description = $request->input('description');
        $animal->years = $request->input('years');

        $animal->save();
        return redirect('animals');

    }
}

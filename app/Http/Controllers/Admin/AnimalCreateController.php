<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Animal;
use App\User;
use App\Role;
use Gate;
use Illuminate\Http\Request;

class AnimalCreateController extends Controller
{

    public function _construct(){

        $this->middleware('auth');
    }
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function index()
    {

        $data = [
            "breeds" => \App\Breed::all(),
        ];
        return view('admin.users.create', $data);
    }

    public function create(Request $request){

        $data = request()->validate([

            'animal_name'=>'required|min:4',
            'description'=>'required|max:255',
            'neutered'=>'required|min:2|max:4',
            'gender'=>'required|min:6|max:7',
            'years'=>'required|numeric|min:1|max:20',
            'image'=>'required|max:10240'
            ]);

        $animal = \App\Animal::make();

        if ($request->hasfile('image')){
            $file = $request->file('image');
            $extendion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extendion;
            $file->move('uploads/cats/', $filename);
            $animal->image=$filename;
        } else {
            return $request;
            $animal->image = '';

        }


        $animal->breed_name = $request->input('breed_name');
        $animal->animal_name = $request->input('animal_name');
        $animal->gender = $request->input('gender');
        $animal->neutered = $request->input('neutered');
        $animal->description = $request->input('description');
        $animal->years = $request->input('years');

        $animal->save();
        return redirect('animals');


    }
}

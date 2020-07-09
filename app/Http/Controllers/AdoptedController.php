<?php

namespace App\Http\Controllers;

use App\Adopted;
use App\Http\Controllers\Controller;
use App\Animal;
use App\User;
use Illuminate\Http\Request;

class AdoptedController extends Controller
{


    /**
     * Show the profile for the given user.
     *
     * @param int $id
     * @return View
     */

//    public function add(Animal $animal)
//    {
//
//        Adopted::session()->add(array(
//
//            'breed_name' => $animal->breed_name,
//            'animal_name' => $animal->animal_name,
//            'gender' => $animal->gender,
//            'neutered' => $animal->neutered,
//            'description' => $animal->description,
//            'image' => $animal->image,
//            'years' => $animal->years,
//
//        ));
//        return back();
//
//    }

    public function index()
    {

        $data = [
            "breeds" => \App\Breed::all(),
        ];
        return view('adopted', $data);
    }

    public function create(Request $request)
    {

        $path = "";

        if ($request->image) {
            $path = $request->image->storeAs('images', 'animal_' . $request->input('id') . '.' . $request->image->getClientOriginalExtension());
        }

        $animal = \App\Animal::make();
        $animal->breed_name = $request->input('breed_name');
        $animal->animal_name = $request->input('animal_name');
        $animal->gender = $request->input('gender');
        $animal->description = $request->input('description');
        $animal->years = $request->input('years');

        if (!empty($path)) {
            $animal->image = $path;
        }

        $animal->save();
        return redirect('adopted');

    }


}

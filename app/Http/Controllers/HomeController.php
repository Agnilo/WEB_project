<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $animals = [];

        foreach (\App\Animal::all() as $animal){
            $image = "";
            if ($animal->image){
                $image = 'http://localhost/project/storage/app/' .$animal->image;
            }
            array_push($animals,
            [
                "breed_name" => $animal->breed_name,
                "animal_name" => $animal->animal_name,
                "gender" => $animal->gender,
                "neutered" => $animal->neutered,
                "image" => $image,
                "description" => $animal->description,
                "years" => $animal->years,
            ]);

        }
        $data = [
            "breeds" => \App\Breed::all(),
            "animals" => $animals
        ];



        return view('home', $data);
    }
}

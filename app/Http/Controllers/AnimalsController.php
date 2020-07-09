<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;

class AnimalsController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function index()
    {
        return view('animals', ['animals' => \App\Animal::all()]);
    }

    function list(){

    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;

class BreedController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function show($id)
    {
        return view('breed', ['breed' => \App\Breed::find($id)]);
    }
}

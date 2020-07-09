<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Breed extends Model
{
    public function adopted()
    {

        return $this->hasMany('App\Adopted');
    }
}

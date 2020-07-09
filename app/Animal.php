<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    public function breed()
    {
        return $this->belongsTo('App\Breed');
    }
}

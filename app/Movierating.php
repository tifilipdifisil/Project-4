<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movierating extends Model
{
    public function movies()
    {
        #Movierating one-to-many relationship with Movies
        return $this->hasMany('App\movie');
    }


}


<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function movierating()
    {
        # one-to-many Movie belongs to Movierating
        return $this->belongsTo('App\Movierating');
    }


}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Raza extends Model
{
    use HasFactory;

    //relacion uno a muchos

    public function animals(){
        return $this->hasMany('App\Models\Animale');
    }
}

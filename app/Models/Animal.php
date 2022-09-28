<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    //relacion uno a muchos

    public function raza(){
        return $this->belongsTo('App\Models\Raza');
    }

    public function genero(){
        return $this->belongsTo('App\Models\Genero');
    }

    public function categoria(){
        return $this->belongsTo('App\Models\Categoria');
    }

    public function tamaño(){
        return $this->belongsTo('App\Models\Tamaño');
    }
}

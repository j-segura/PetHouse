<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    use HasFactory;

    //relacion uno a muchos
    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function animals() {
        return $this->hasMany('App\Models\Animal');
    }
}

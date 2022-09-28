<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Categoria;
use App\Models\Genero;
use App\Models\Raza;
use App\Models\Tamaño;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index()
    {
        $animals = Animal::orderBy('id', 'desc')->paginate(9);

        return view('animales.index', compact('animals'));
    }

    public function show(Animal $animal)
    {
        $similares = Animal::where('categoria_id', $animal->categoria->id)
                                ->where('id', '!=', $animal->id)
                                ->latest('id')
                                ->take(4)
                                ->get();

        return view('animales.show', compact('animal', 'similares'));
    }

    public function categoria(Categoria $categoria){

        $animals = Animal::where('categoria_id', $categoria->id)
                            ->latest('id')
                            ->paginate(9);

        return view('animales.categoria', compact('animals', 'categoria'));
    }


    public function raza(Raza $raza){

        $animals = Animal::where('raza_id', $raza->id)
                            ->latest('id')
                            ->paginate(9);

        return view('animales.raza', compact('animals', 'raza'));
    }

    public function genero(Genero $genero){

        $animals = Animal::where('genero_id', $genero->id)
                            ->latest('id')
                            ->paginate(9);

        return view('animales.genero', compact('animals', 'genero'));
    }

    public function tamaño(Tamaño $tamaño){

        $animals = Animal::where('tamaño_id', $tamaño->id)
                            ->latest('id')
                            ->paginate(9);

        return view('animales.tamaño', compact('animals', 'tamaño'));
    }
}

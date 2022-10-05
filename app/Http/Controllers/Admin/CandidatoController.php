<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Animal;
use App\Models\Categoria;
use App\Models\Genero;
use App\Models\Raza;
use App\Models\Tamaño;

class CandidatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $candidatos = Animal::orderBy('id', 'desc')->get();
        return view('admin.candidatos.index', compact('candidatos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::pluck('name', 'id')->toArray();
        $generos = Genero::pluck('name', 'id')->toArray();
        $razas = Raza::pluck('name', 'id')->toArray();
        $tamaños = Tamaño::pluck('name', 'id')->toArray();
        return view('admin.candidatos.create', compact('categorias', 'generos', 'razas', 'tamaños'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:animals',
            'description' => 'required',
            'foto' => 'required|image|max:2048',
            'edad' => 'required',
            'categoria_id' => 'required',
            'genero_id' => 'required',
            'raza_id' => 'required',
            'tamaño_id' => 'required',
        ]);

        $animal = $request->all();

        if ($foto = $request->file('foto')) {
            $rutaGuardarImg = 'img/animals/';
            $fotoAnimal = date('YmdHis') . "." . $foto->getClientOriginalExtension();
            $foto->move($rutaGuardarImg, $fotoAnimal);
            $animal['foto'] = "$fotoAnimal";
        }

        $animal = Animal::create($animal);

        return redirect()->route('admin.candidatos.index')->with('info', 'El animal se agrego con exito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Animal $candidato)
    {
        return view('admin.candidatos.show', compact('candidato'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Animal $candidato)
    {
        $categorias = Categoria::pluck('name', 'id')->toArray();
        $generos = Genero::pluck('name', 'id')->toArray();
        $razas = Raza::pluck('name', 'id')->toArray();
        $tamaños = Tamaño::pluck('name', 'id')->toArray();
        return view('admin.candidatos.edit', compact('candidato', 'categorias', 'generos', 'razas', 'tamaños'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Animal $candidato)
    {
        $request->validate([
            'name' => 'required',
            'slug' => "required|unique:animals,slug,$candidato->id",
            'description' => 'required',
            'foto' => 'image|max:2048',
            'edad' => 'required',
            'categoria_id' => 'required',
            'genero_id' => 'required',
            'raza_id' => 'required',
            'tamaño_id' => 'required',
        ]);

        $animal = $request->all();

        if ($foto = $request->file('foto')) {
            $rutaGuardarImg = 'img/animals/';
            $fotoAnimal = date('YmdHis') . "." . $foto->getClientOriginalExtension();
            $foto->move($rutaGuardarImg, $fotoAnimal);
            $animal['foto'] = "$fotoAnimal";
        } else {
            unset($animal['foto']);
        }

        $candidato->update($animal);
        return redirect()->route('admin.candidatos.edit', compact('candidato'))->with('info', 'El animal se actualizo con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Animal $candidato)
    {
        $candidato->delete();
        return redirect()->route('admin.candidatos.index')->with('info', 'El animal se elimino con exito');
    }
}

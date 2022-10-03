<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria::orderBy('id', 'desc')->get();
        return view('admin.categorias.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categorias.create');
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
            'slug' => 'required|unique:categorias',
            'banner' => 'required|image|max:2048',
        ]);

        $categoria = $request->all();

        if ($banner = $request->file('banner')) {
            $rutaGuardarImg = 'img/categoria_banners/';
            $bannerCategoria = date('YmdHis') . "." . $banner->getClientOriginalExtension();
            $banner->move($rutaGuardarImg, $bannerCategoria);
            $categoria['banner'] = "$bannerCategoria";
        }

        $categoria = Categoria::create($categoria);

        return redirect()->route('admin.categorias.edit', compact('categoria'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Categoria $categoria)
    {
        return view('admin.categorias.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Categoria $categoria)
    {
        return view('admin.categorias.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categoria $categoria)
    {
        $request->validate([
            'name' => 'required',
            'slug' => "required|unique:categorias,slug,$categoria->id",
            'banner' => 'image|max:2048',
        ]);

        $cat = $request->all();

        if ($banner = $request->file('banner')) {
            $rutaGuardarImg = 'img/categoria_banners/';
            $bannerCategoria = date('YmdHis') . "." . $banner->getClientOriginalExtension();
            $banner->move($rutaGuardarImg, $bannerCategoria);
            $cat['banner'] = "$bannerCategoria";
        } else {
            unset($cat['foto']);
        }

        $categoria->update($cat);
        return redirect()->route('admin.categorias.edit', compact('categoria'))->with('info', 'La categoria se actualizo con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoria $categoria)
    {
        $categoria->delete();
        return redirect()->route('admin.categorias.index')->with('info', 'La categoria se elimino con exito');
    }
}

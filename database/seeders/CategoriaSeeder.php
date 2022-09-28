<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoria = new Categoria();
        $categoria->name = 'Perros';
        $categoria->banner = 'perros.jpg';
        $categoria->save();

        $categoria = new Categoria();
        $categoria->name = 'Gatos';
        $categoria->banner = 'gatos.webp';
        $categoria->save();

    }
}

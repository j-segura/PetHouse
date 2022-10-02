<?php

namespace Database\Seeders;

use App\Models\Genero;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genero = new Genero();
        $genero->name = 'Hembra';
        $genero->slug = 'hembra';
        $genero->save();

        $genero = new Genero();
        $genero->name = 'Macho';
        $genero->slug = 'macho';
        $genero->save();
    }
}

<?php

namespace Database\Seeders;

use App\Models\Raza;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RazaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $raza = new Raza();
        $raza->name = 'Pit Bull';
        $raza->save();

        $raza = new Raza();
        $raza->name = 'Siames';
        $raza->save();

        $raza = new Raza();
        $raza->name = 'Chihuahua';
        $raza->save();

        $raza = new Raza();
        $raza->name = 'Terrier';
        $raza->save();

        $raza = new Raza();
        $raza->name = 'Persa';
        $raza->save();

        $raza = new Raza();
        $raza->name = 'Siberiano';
        $raza->save();

        $raza = new Raza();
        $raza->name = 'Akita inu';
        $raza->save();

        $raza = new Raza();
        $raza->name = 'Akita americano';
        $raza->save();

        $raza = new Raza();
        $raza->name = 'Bengali';
        $raza->save();

        $raza = new Raza();
        $raza->name = 'Banbino';
        $raza->save();

    }
}

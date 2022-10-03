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
        $raza->slug = 'pit-bull';
        $raza->save();

        $raza = new Raza();
        $raza->name = 'Siames';
        $raza->slug = 'siames';
        $raza->save();

        $raza = new Raza();
        $raza->name = 'Chihuahua';
        $raza->slug = 'chihuahua';
        $raza->save();

        $raza = new Raza();
        $raza->name = 'Terrier';
        $raza->slug = 'terrier';
        $raza->save();

        $raza = new Raza();
        $raza->name = 'Persa';
        $raza->slug = 'persa';
        $raza->save();

        $raza = new Raza();
        $raza->name = 'Siberiano';
        $raza->slug = 'siberiano';
        $raza->save();

        $raza = new Raza();
        $raza->name = 'Akita inu';
        $raza->slug = 'akita-inu';
        $raza->save();

        $raza = new Raza();
        $raza->name = 'Akita americano';
        $raza->slug = 'akita-americano';
        $raza->save();

        $raza = new Raza();
        $raza->name = 'Bengali';
        $raza->slug = 'bengali';
        $raza->save();

        $raza = new Raza();
        $raza->name = 'Banbino';
        $raza->slug = 'banbino';
        $raza->save();

    }
}

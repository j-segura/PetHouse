<?php

namespace Database\Seeders;

use App\Models\Animal;
use App\Models\Animale;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        $this->call(RazaSeeder::class);
        $this->call(GeneroSeeder::class);
        $this->call(CategoriaSeeder::class); 
        $this->call(TamañoSeeder::class);
        Animal::factory(50)->create();
    }
}

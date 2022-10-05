<?php

namespace Database\Factories;

use App\Models\Categoria;
use App\Models\Genero;
use App\Models\Raza;
use App\Models\Tamaño;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Animal>
 */
class AnimalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->word();

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => $this->faker->text(500),
            'edad' => $this->faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8]),
            'foto' => $this->faker->randomElement(['animal3.jpg', 'animal4.jpg', 'animal5.jpg', 'animal6.jpg', 'animal7.jpg', 'animal8.jpg', 'animal9.jpg', 'animal10.jpg', 'animal11.jpg',]),
            'categoria_id' => Categoria::all()->random()->id,
            'genero_id' => Genero::all()->random()->id,
            'raza_id' => Raza::all()->random()->id,
            'tamaño_id' => Tamaño::all()->random()->id,
        ];
    }
}

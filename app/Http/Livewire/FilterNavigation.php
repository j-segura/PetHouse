<?php

namespace App\Http\Livewire;

use App\Models\Categoria;
use Livewire\Component;

class FilterNavigation extends Component
{
    public function render()
    {
        $categorias = Categoria::all();

        return view('livewire.filter-navigation', compact('categorias'));
    }
}

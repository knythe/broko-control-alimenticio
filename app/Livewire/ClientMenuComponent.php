<?php

namespace App\Livewire;

use App\Models\receta;
use Livewire\Component;

class ClientMenuComponent extends Component
{
    public function render()
    {
        $requerimientos = auth()->user()->paciente->requerimiento ?? null;
        $recetas = receta::all(); // Fetch all recetas from the database
        return view('livewire.client-menu-component', [
            'recetas' => $recetas,
            'requerimientos' => $requerimientos,      
        ]);
    }
}

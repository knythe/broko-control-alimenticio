<?php

namespace App\Livewire;

use App\Models\receta;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class CreateRecetaComponent extends Component
{
    public $imagen;
    public $nombre;
    public $descripcion;
    public $ingredientes;
    public $preparacion;
    public $calorias;
    public $carbohidratos;
    public $proteinas;
    public $grasas;
    public $dia;
    public $tipo_comida;

    use WithFileUploads;

    public function registerReceta()
    {
        // Validate the input
       $this->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string|max:1000',
            'ingredientes' => 'required|string|max:1000',
            'preparacion' => 'required|string|max:1000',
            'calorias' => 'required|numeric|min:0',
            'carbohidratos' => 'required|numeric|min:0',
            'proteinas' => 'required|numeric|min:0',
            'grasas' => 'required|numeric|min:0',
            'dia' => 'required|string|max:50',
            'tipo_comida' => 'required|string|max:50',
            'imagen' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // Optional image upload
        ]);

        $imagePath = null;
        if ($this->imagen) {
            $imagePath = $this->imagen->store('recetas', 'public');
        }

        // Create the user
        receta::create([
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
            'ingredientes' => $this->ingredientes,
            'preparacion' => $this->preparacion,
            'calorias' => $this->calorias,
            'carbohidratos' => $this->carbohidratos,
            'proteinas' => $this->proteinas,
            'grasas' => $this->grasas,
            'dia' => $this->dia,
            'tipo_comida' => $this->tipo_comida,
            'imagen' => $imagePath,
        ]);

        $this->reset([
            'imagen',
            'nombre',
            'descripcion',
            'ingredientes',
            'preparacion',
            'calorias',
            'carbohidratos',
            'proteinas',
            'grasas',
            'dia',
            'tipo_comida'
        ]);
    }

    public function render()
    {
        $recetas = receta::all();
        return view('livewire.create-receta-component', [
            'recetas' => $recetas,
        ]);
    }
}

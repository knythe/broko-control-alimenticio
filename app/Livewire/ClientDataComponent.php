<?php

namespace App\Livewire;

use App\Models\paciente;
use App\Models\requerimiento;
use GuzzleHttp\RetryMiddleware;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class ClientDataComponent extends Component
{
    public $user_id;
    public $sexo;
    public $edad;
    public $peso;
    public $altura;
    public $nivel_actividad;
    public $tipo_diabetes;
    public $objetivo;
    public $restricciones;
    public $preferencias;

    public function mount()
    {
        $this->user_id = auth()->id();
    }


    public function registerData()
    {

        $this->validate([
            'sexo' => 'required|string',
            'edad' => 'required|integer|min:0',
            'peso' => 'required|numeric|min:0',
            'altura' => 'required|numeric|min:0',
            'nivel_actividad' => 'required|string',
            'tipo_diabetes' => 'required|string',
            'objetivo' => 'required|string',
            'restricciones' => 'nullable|string',
            'preferencias' => 'nullable|string',
        ]);

        $paciente = paciente::create([
            'user_id' => $this->user_id,
            'sexo' => $this->sexo,
            'edad' => $this->edad,
            'peso' => $this->peso,
            'altura' => $this->altura,
            'nivel_actividad' => $this->nivel_actividad,
            'tipo_diabetes' => $this->tipo_diabetes,
            'objetivo' => $this->objetivo,
            'restricciones' => $this->restricciones,
            'preferencias' => $this->preferencias,
        ]);

        // Cálculo de requerimientos
        $peso = $this->peso;
        $altura = $this->altura;
        $edad = $this->edad;

        // Calorías según fórmula Mifflin-St Jeor
        if ($this->sexo === 'masculino') {
            $calorias = (10 * $peso) + (6.25 * $altura) - (5 * $edad) + 5;
        } else {
            $calorias = (10 * $peso) + (6.25 * $altura) - (5 * $edad) - 161;
        }

        // Multiplicar por factor de actividad
        $factorActividad = match ($this->nivel_actividad) {
            'bajo' => 1.2,
            'moderado' => 1.55,
            'alto' => 1.9,
            default => 1.2,
        };

        $caloriasTotales = $calorias * $factorActividad;

        // Distribución nutricional estándar (puedes ajustarla)
        $carbohidratos = ($caloriasTotales * 0.5) / 4;
        $proteinas     = ($caloriasTotales * 0.2) / 4;
        $grasas        = ($caloriasTotales * 0.3) / 9;

        // Guardar requerimientos
        requerimiento::create([
            'paciente_id' => $paciente->id,
            'calorias' => round($caloriasTotales),
            'carbohidratos' => round($carbohidratos, 2),
            'proteinas' => round($proteinas, 2),
            'grasas' => round($grasas, 2),
        ]);

        return redirect()->to('/v2/home');
    }




    public function render()
    {
        return view('livewire.client-data-component');
    }
}

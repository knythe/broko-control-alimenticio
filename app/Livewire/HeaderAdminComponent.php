<?php

namespace App\Livewire;

use Livewire\Component;

class HeaderAdminComponent extends Component
{

    public function logout()
    {
        auth()->logout();                // Cierra sesión
        session()->invalidate();         // Invalida la sesión actual
        session()->regenerateToken();    // Regenera el token CSRF

        return redirect('/v1/login');       // Redirige usando la URL directa
    }

    public function render()
    {
        return view('livewire.header-admin-component');
    }
}

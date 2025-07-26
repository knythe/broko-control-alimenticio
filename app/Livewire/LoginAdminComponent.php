<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LoginAdminComponent extends Component
{
    public $email;
    public $password;

    public function login()
    {
        // Validar campos
        $this->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        // Intentar autenticar
        if (auth()->attempt(['email' => $this->email, 'password' => $this->password])) {
            session()->regenerate();

            // Verificar si el usuario tiene el rol de admin (usando Spatie)
            if (auth()->user()->hasRole('admin')) {
                return redirect('/v1/panel');
            } else {
                // Si no es admin, cerrar sesión y mostrar error
                auth()->logout();
                session()->invalidate();
                session()->regenerateToken();

                session()->flash('error', 'Acceso no autorizado para este perfil.');
                return redirect('/v1/login');
            }
        }

        // Si falla la autenticación
        session()->flash('error', 'Credenciales inválidas. Inténtalo nuevamente.');
    }


    public function render()
    {
        return view('livewire.login-admin-component');
    }
}

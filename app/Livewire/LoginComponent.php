<?php

namespace App\Livewire;

use Livewire\Component;

class LoginComponent extends Component
{

    public $email;
    public $password;
    public function login()
    {
        // Validate the input
        $this->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        // Attempt to log the user in
        if (auth()->attempt(['email' => $this->email, 'password' => $this->password])) {
            return redirect()->to('/v2/home');
             // Redirect to dashboard on success
        }

        // If login fails, add an error message
        session()->flash('error', 'Invalid credentials. Please try again.');
    }

    public function render()
    {
        return view('livewire.login-component');
    }
}

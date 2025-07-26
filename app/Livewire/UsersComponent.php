<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class UsersComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $email;
    public $imagen;
    public $password;

    public function register()
    {
        // Validate the input
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'imagen' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // Optional image upload
            'password' => 'required|string|min:8',
        ]);

        $imagePath = null;
        if ($this->imagen) {
            $imagePath = $this->imagen->store('users', 'public');
        }

        // Create the user
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'imagen' => $imagePath,
            'password' =>  Hash::make($this->password),
        ]);

        // Log in the user
        auth()->login($user);

        return redirect()->to('/v2/data');
    }

    public function render()
    {
        return view('livewire.users-component');
    }
}

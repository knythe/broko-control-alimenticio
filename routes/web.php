<?php

use App\Livewire\LoginAdminComponent;
use Illuminate\Support\Facades\Route;

/* creacion de roles de manera rapida*/
//$role = Role::create(['name' => 'admin']);

// admin routes
Route::middleware(['auth', 'admin'])->prefix('v1')->group(function () {
    // panel route
    Route::get('/panel', function () {
        return view('admin.panel');
    });
    // users route
    Route::get('/users', function () {
        return view('admin.users');
    });
    // recetas route
    Route::get('/recetas', function () {
        return view('admin.recetas');
    });
});

// clients routes
Route::prefix('v2')->group(function () {
    // client home route
    Route::get('/home', function () {
        return view('client.home');
    });
    // client menu routes
    Route::get('/menu', function () {
        return view('client.menu');
    });
    // client control route
    Route::get('/control', function () {
        return view('client.control');
    });
    // client login route
    Route::get('/login', function () {
        return view('client.login');
    });
    // client register route
    Route::get('/register', function () {
        return view('client.register');
    });
    // client data route
    Route::get('/data', function () {
        return view('client.data-client');
    });
});

Route::middleware(['auth'])->prefix('v2')->group(function (){
    
});

// Página pública o login
//Route::get('/v1', [AuthController::class, 'index'])->name('login');
Route::get('/v1/login', LoginAdminComponent::class)->name('login');

Route::get('/v1/login', function (){
    return view('auth.login');      
});

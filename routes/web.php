<?php

use App\Http\Livewire\Login\Login;
use App\Http\Livewire\Usuarios\BorrarUsuarios;
use App\Http\Livewire\Usuarios\CrearUsuarios;
use App\Http\Livewire\Usuarios\EditarUsuarios;
use App\Http\Livewire\Usuarios\IndexUsuarios;
use App\Http\Livewire\Usuarios\MostrarUsuarios;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/login',Login::class)->name('login');
/* Proteger rutas */

Route::group(['middleware' => 'auth'], function (){
/*Ruta de usuarios*/
Route::get('/usuarios',IndexUsuarios::class)->name('index.usuarios');
Route::get('/usuarios/crear',CrearUsuarios::class)->name('crear.usuarios');
Route::get('usuarios/{agregar}/mostrar',MostrarUsuarios::class)->name('mostrar.usuarios');
Route::get('usuarios/{agregar}/editar',EditarUsuarios::class)->name('editar.usuarios');
Route::get('/usuarios/{agregar}/eliminar', BorrarUsuarios::class)->name('borrar.usuarios');

});

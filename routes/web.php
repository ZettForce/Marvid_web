<?php

use App\Http\Livewire\Alumnos\BorrarAlumnos;
use App\Http\Livewire\Alumnos\CrearAlumnos;
use App\Http\Livewire\Alumnos\EditarAlumnos;
use App\Http\Livewire\Alumnos\IndexAlumnos;
use App\Http\Livewire\Alumnos\MostrarAlumnos;
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

/* Rutas protegidas */
Route::group(['middleware' => 'auth'], function (){
/*Ruta de usuarios*/
Route::get('/usuarios',IndexUsuarios::class)->name('index.usuarios');
Route::get('/usuarios/crear',CrearUsuarios::class)->name('crear.usuarios');
Route::get('usuarios/{agregar}/mostrar',MostrarUsuarios::class)->name('mostrar.usuarios');
Route::get('usuarios/{agregar}/editar',EditarUsuarios::class)->name('editar.usuarios');
Route::get('/usuarios/{agregar}/eliminar', BorrarUsuarios::class)->name('borrar.usuarios');

/*Rutas de alumnos*/
Route::get('/alumnos',IndexAlumnos::class)->name('index.alumnos');
Route::get('/alumnos/crear',CrearAlumnos::class)->name('crear.alumnos');
Route::get('/alumnos/{alumno}/eliminar',BorrarAlumnos::class)->name('borrar.alumnos');
Route::get('alumnos/{alumno}/mostrar', MostrarAlumnos::class)->name('mostrar.alumnos');
Route::get('alumnos/{alumno}/editar',EditarAlumnos::class)->name('editar.alumnos');
});

<?php

use App\Http\Livewire\Equipos\EquiposCreate;
use App\Http\Livewire\Equipos\EquiposDelete;
use App\Http\Livewire\Equipos\EquiposEdit;
use App\Http\Livewire\Equipos\EquiposIndex;
use App\Http\Livewire\Equipos\EquiposShow;
use App\Http\Livewire\Login\Login;
use App\Http\Livewire\Prestamos\PrestamosCreate;
use App\Http\Livewire\Prestamos\PrestamosDelete;
use App\Http\Livewire\Prestamos\PrestamosEdit;
use App\Http\Livewire\Prestamos\PrestamosIndex;
use App\Http\Livewire\Prestamos\PrestamosShow;
use App\Http\Livewire\Usuarios\UsuariosCreate;
use App\Http\Livewire\Usuarios\UsuariosDelete;
use App\Http\Livewire\Usuarios\UsuariosEdit;
use App\Http\Livewire\Usuarios\UsuariosIndex;
use App\Http\Livewire\Usuarios\UsuariosShow;
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

//Inicio de sesión
Route::get('/', Login::class)->name('login');

//Protección de Rutas en grupo
Route::group(['middleware' => 'auth'], function () {
    //Rutas de Equipos
    Route::get('/equipos', EquiposIndex::class)->name('equipos.index');
    Route::get('/equipos/crear', EquiposCreate::class)->name('equipos.create');
    Route::get('/equipos/{equipo}/eliminar', EquiposDelete::class)->name('equipos.delete');
    Route::get('/equipos/{equipo}/editar', EquiposEdit::class)->name('equipos.edit');
    Route::get('/equipos/{equipo}/mostrar', EquiposShow::class)->name('equipos.show');
    //Rutas de Prestamos
    Route::get('/prestamos', PrestamosIndex::class)->name('prestamos.index');
    Route::get('/prestamos/crear', PrestamosCreate::class)->name('prestamos.create');
    Route::get('/prestamos/{prestamo}/eliminar', PrestamosDelete::class)->name('prestamos.delete');
    Route::get('/prestamos/{prestamo}/editar', PrestamosEdit::class)->name('prestamos.edit');
    Route::get('/prestamos/{prestamo}/mostrar', PrestamosShow::class)->name('prestamos.show');
    //Rutas de Usuarios
    Route::get('/usuarios', UsuariosIndex::class)->name('usuarios.index');

    Route::get('/usuarios/{usuario}/eliminar', UsuariosDelete::class)->name('usuarios.delete');
    Route::get('/usuarios/{usuario}/editar', UsuariosEdit::class)->name('usuarios.edit');
    Route::get('/usuarios/{usuario}/mostrar', UsuariosShow::class)->name('usuarios.show');
});

Route::get('/usuarios/crear', UsuariosCreate::class)->name('usuarios.create');

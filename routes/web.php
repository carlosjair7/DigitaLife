<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Ruta principal (Home)
Route::get('/', function () {
    return view('welcome'); // Muestra la vista de bienvenida
});

// Rutas de autenticación
Auth::routes(); // Genera rutas predeterminadas para login, registro, y logout

// Ruta para la página de inicio después de autenticarse
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Muestra la vista del panel de inicio del usuario autenticado

// Rutas protegidas por middleware: 'auth' (solo usuarios autenticados) y 'is_admin' (solo administradores)
Route::middleware(['auth', 'is_admin'])->group(function () {
    // Panel de administración
    Route::get('admin/dashboard', function () {
        return view('admin.dashboard'); // Muestra el panel de administración
    })->name('admin.dashboard');

    
// Ruta para activar o desactivar la alarma
Route::post('/toggle_alarm', [App\Http\Controllers\HomeController::class, 'toggleAlarm'])->name('toggle_alarm');

   





   
    // RUTAS PARA GESTIÓN DE USUARIOS//

    // Mostrar lista de usuarios
    Route::get('admin/users', [UserController::class, 'index'])->name('admin.users.index');
    // Muestra todos los usuarios registrados.

    // Mostrar formulario para crear un nuevo usuario
    Route::get('admin/users/create', [UserController::class, 'create'])->name('admin.users.create');
    // Muestra el formulario para crear un nuevo usuario.

    // Guardar un nuevo usuario
    Route::post('admin/users', [UserController::class, 'store'])->name('admin.users.store');
    // Recibe los datos del formulario de creación de usuario y lo guarda en la base de datos.

    // Mostrar formulario para editar un usuario existente
    Route::get('admin/users/{user}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
    // Muestra el formulario de edición para un usuario específico.

    // Actualizar los datos de un usuario
    Route::put('admin/users/{user}', [UserController::class, 'update'])->name('admin.users.update');
    // Actualiza los datos del usuario especificado.

    // Eliminar un usuario
    Route::delete('admin/users/{user}', [UserController::class, 'destroy'])->name('admin.users.destroy');
    // Elimina el usuario especificado de la base de datos.

});

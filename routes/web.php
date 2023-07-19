<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermisoController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\ContratoController;
use App\Http\Controllers\CapacidadController;
use App\Http\Controllers\CapacitacionController;

use App\Http\Controllers\BlogController;
use App\Models\Blog;


use App\Http\Controllers\CostosController;


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

Route::get('/', [RegisterController::class, 'index'])->name('index');

Route::get('/register', [RegisterController::class, 'show'])->name('registro');

Route::post('/register', [RegisterController::class, 'register'])->name('registrar');

Route::get('/login', [LoginController::class, 'show'])->name('inicio');

Route::post('/login', [LoginController::class, 'login'])->name('iniciar');

Route::get('/logout', [LoginController::class,'logout'])->name('salir');

Route::get('/home', [UserController::class, 'index'])->name('home');

Route::get('/roles', [RoleController::class, 'index'])->name('roles');
Route::get('/crearRol', [RoleController::class, 'create'])->name('crearRol');
Route::post('/guardarRol', [RoleController::class, 'store'])->name('guardarRol');
Route::get('/editarRol/{id}', [RoleController::class, 'edit'])->name('editarRol');
Route::post('/actualizarRol/{id}', [RoleController::class, 'update'])->name('actualizarRol');
Route::post('/eliminarRol/{id}', [RoleController::class, 'destroy'])->name('eliminarRol');

Route::get('/permisos', [PermisoController::class, 'index'])->name('permisos');
Route::get('/crearPermiso', [PermisoController::class, 'create'])->name('crearPermiso');
Route::post('/guardarPermiso', [PermisoController::class, 'store'])->name('guardarPermiso');
Route::get('/editarPermiso/{id}', [PermisoController::class, 'edit'])->name('editarPermiso');
Route::post('/actualizarPermiso/{id}', [PermisoController::class, 'update'])->name('actualizarPermiso');
Route::post('/eliminarPermiso/{id}', [PermisoController::class, 'destroy'])->name('eliminarPermiso');

Route::get('/personal', [PersonalController::class, 'index'])->name('personal');
Route::get('/registrarPersonal', [PersonalController::class, 'create1'])->name('crearEmpleado');
Route::post('/registrarPersonal/paso1', [PersonalController::class, 'store1'])->name('guardarEmpleado');
Route::get('/registrarPersonal/paso2', [PersonalController::class, 'create2'])->name('personaldos');
Route::post('/registrarPersonal/paso2', [PersonalController::class, 'store2'])->name('guardardos');
Route::get('/registrarPersonal/paso3', [PersonalController::class, 'create3'])->name('personaltres');
Route::post('/registrarPersonal/paso3', [PersonalController::class, 'store3'])->name('guardartres');

Route::get('/contratos', [ContratoController::class, 'index'])->name('contratos');
Route::get('/crearContrato', [ContratoController::class, 'create'])->name('crearContrato');
Route::post('/guardarContrato', [ContratoController::class, 'store'])->name('guardarContrato');

Route::get('/capacitaciones', [CapacitacionController::class, 'index'])->name('capacitaciones');
Route::get('/crearCapacitacion', [CapacitacionController::class, 'create'])->name('crearCapacitacion');
Route::post('/guardarCapacitacion', [CapacitacionController::class, 'store'])->name('guardarCapacitacion');
//Route::get('/capacitacion/{id}', [CapacitacionController::class, 'show'])->name('capacitacion');
Route::get('/editarCapacitacion/{id}', [CapacitacionController::class, 'edit'])->name('editarCapacitacion');
Route::post('/actualizarCapacitacion', [CapacitacionController::class, 'update'])->name('actualizarCapacitacion');
Route::post('/eliminarCapacitacion/{id}', [CapacitacionController::class, 'destroy'])->name('eliminarCapacitacion');

Route::get('/inscripciones/{id}', [CapacitacionController::class, 'inscripciones'])->name('inscripciones');
Route::post('/inscribir/{id}', [CapacitacionController::class, 'inscribir'])->name('inscribir');
Route::get('/inscritos/{id}', [CapacitacionController::class, 'inscritos'])->name('inscritos');
Route::post('/puntuar/{id}', [CapacitacionController::class, 'puntuar'])->name('puntuar');

Route::get('/verPerfil', [UserController::class, 'showPerfil'])->name('perfil');
Route::get('/editarPerfil', [UserController::class, 'editPerfil'])->name('editar');
Route::post('/actualizarPerfil', [UserController::class, 'updatePerfil'])->name('actualizar');
Route::post('/eliminarPerfil/{id}', [UserController::class, 'destroyPerfil'])->name('eliminar');


//========================PEDIDOS==============================
Route::get('/costos', [CostosController::class, 'index'])->name('costos');

Route::resource('procesarPedido', procesarPedidosController::class);

// -------------------
Route::resource('pedido', PedidosController::class);

Route::get('cancelar-pedido',function(){
    return redirect()->route('pedido.index')->with('datos','Acción Cancelada');
})->name('cancelar-pedido');

Route::get('pedido/{id}/confirmar',[PedidosController::class,'confirmar'
])->name('pedido.confirmar');

// -------------------
Route::resource('pago', PagosController::class);

Route::get('cancelar-pago',function(){
    return redirect()->route('pago.index')->with('datos','Acción Cancelada');
})->name('cancelar-pago');

Route::get('pago/{id}/confirmar',[PagosController::class,'confirmar'
])->name('pago.confirmar');

Route::get('pagos',[PagosController::class,'pagos'
])->name('pago.pagos');

Route::get('pago/{id}/anular',[PagosController::class,'anular'
])->name('pago.anular');
////////////////////////////////////////////////////////////////

Route::get('/asistencia', [CapacidadController::class, 'index'])->name('asistencia');
Route::get('/registrarCliente', [CapacidadController::class, 'create'])->name('crearCliente');
Route::post('/cearCliente', [CapacidadController::class, 'store'])->name('guardarAsistencia');
Route::get('/editarCliente/{id}', [CapacidadController::class, 'edit'])->name('editarCliente');
Route::post('/actualizarCliente/{id}', [CapacidadController::class, 'update'])->name('actualizarCliente');
Route::post('/eliminarCliente/{id}', [CapacidadController::class, 'destroy'])->name('eliminarCliente');
//
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/crearBlog', [BlogController::class, 'create'])->name('crearBlog');
Route::post('/guardarBlog', [BlogController::class, 'store'])->name('guardarBlog');
Route::get('/editarBlog/{id}', [BlogController::class, 'edit'])->name('editarBlog');
Route::post('/actualizarBlog/{id}', [BlogController::class, 'update'])->name('actualizarBlog');
Route::post('/eliminarBlog/{id}', [BlogController::class, 'destroy'])->name('eliminarBlog');
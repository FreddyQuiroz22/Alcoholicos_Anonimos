<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\ReservaUsuarioController;
use App\Http\Controllers\PersonasController;
use App\Http\Controllers\CarritoUsuarioController;
use App\Models\users_roles;
use App\Models\roles;
use App\Models\productos;
use Illuminate\Support\Facades\Auth;


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

Route::get('/', function () {
    return view('welcome');
})->name('/');

Route::get('/sobre_nosotros', function () {
    return view('todos.sobre');
})->name('sobre_nosotros');

Route::get('/test_alcoholismo', function () {
    return view('todos.test');
})->name('test_alcoholismo');

Route::get('/preguntas_frecuentes', function () {
    return view('todos.index');
})->name('preguntas_frecuentes');
/*-- ruta del test --*/
route::get('/resultado_test',function (){
    return view('ResultadoTest');
})->name('Resultado_test');

Route::get('/inicial', function () {
    $roles = roles::all();
    if (count($roles) < 1) {
        RolesController::inicialCreate();
    }
    return redirect('/');
});

Route::get('/home', function () {
    $idRolUser = users_roles::where('id_user', Auth::id())->get();
    //return $idRolUser[0]->id_rol;
    if (isset($idRolUser->id_rol) == 1) {
        return view('Admin.dashboard');
    } else {
        return view('User.dashboard');
    }
})->middleware(['auth'])->name('home');

Route::post('/createRole', [RolesController::class, 'create'])->middleware(['auth'])->name('createRole');

Route::post('/createReserva', [ReservaUsuarioController::class, 'create'])->middleware(['auth'])->name('createReserva');

Route::get('/libros', [ProductosController::class, 'readAll'])->middleware(['auth'])->name('libros');
Route::get('/libro/{id}', [ProductosController::class, 'readOne'])->middleware(['auth'])->name('getProducto');
Route::post('/createProducto', [ProductosController::class, 'create'])->middleware(['auth'])->name('SaveProducto');
Route::post('/updateProducto', [ProductosController::class, 'update'])->middleware(['auth'])->name('updateProducto');
Route::post('/deleteProducto', [ProductosController::class, 'delete'])->middleware(['auth'])->name('deleteProducto');

Route::get('/getPedidos', [ReservaUsuarioController::class, 'verReservas'])->middleware(['auth'])->name('getPedidos');
Route::get('/getListPedidos', [ReservaUsuarioController::class, 'readAll'])->middleware(['auth'])->name('getListPedidos');
Route::get('/getListEntregados', [ReservaUsuarioController::class, 'readAllEntregados'])->middleware(['auth'])->name('getListEntregados');
Route::get('/getEntregados', [ReservaUsuarioController::class, 'getEntregados'])->middleware(['auth'])->name('getEntregados');
Route::get('/getPedido/{id}', [ReservaUsuarioController::class, 'readOne'])->middleware(['auth'])->name('getPedido');
Route::post('/updatePedidos', [ReservaUsuarioController::class, 'update'])->middleware(['auth'])->name('updatePedidos');
Route::delete('/deletePedidos', [ReservaUsuarioController::class, 'delete'])->middleware(['auth'])->name('deletePedidos');

Route::get('/perfil/{id}', [PersonasController::class, 'viewPersona'])->middleware(['auth'])->name('perfil');
Route::post('/Perfil', [PersonasController::class, 'update'])->middleware(['auth'])->name('updatePersona');


Route::get('/getProductos', [ProductosController::class, 'getProductos'])->middleware(['auth'])->name('getProductos');
Route::get('/productosCarrito', [CarritoUsuarioController::class, 'getProductosCarrito'])->middleware(['auth'])->name('productosCarrito');
Route::post('/addproductosCarrito', [CarritoUsuarioController::class, 'postProductosCarrito'])->middleware(['auth'])->name('postProductosCarrito');

Route::get('/reserva', [ReservaUsuarioController::class, 'reservasUser'])->middleware(['auth'])->name('reserva');
Route::post('/newReserva', [ReservaUsuarioController::class, 'newReserva'])->middleware(['auth'])->name('newReserva');
require __DIR__ . '/auth.php';


<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('inicio');
});

// Colaboradores
Route::get('/colaboradores', function () {
    return view('colaboradores.colaboradores');
});
Route::get('/colaboradores/1', function () {
    return view('colaboradores.colaborador1');
});


// Obras
Route::get('/cocina', function () {
    return view('obras.cocina');
});
Route::get('/salaDeEstar', function () {
    return view('obras.salaDeEstar');
});
Route::get('/comedor', function () {
    return view('obras.comedor');
});
Route::get('/dormitorio', function () {
    return view('obras.dormitorio');
});
Route::get('/baño', function () {
    return view('obras.baño');
});
Route::get('/oficina', function () {
    return view('obras.oficina');
});
Route::get('/exterior', function () {
    return view('obras.exterior');
});
Route::get('/multifuncionales', function () {
    return view('obras.multifuncionales');
});
Route::get('/personalizados', function () {
    return view('obras.personalizados');
});


Route::get('/obra', function () {
    return view('obras.obra');
});

// Blog
Route::get('/blog', function () {
    return view('blog.blog');
});
Route::get('/blog/blog1', function () {
    return view('blog.blog1');
});
Route::get('/blog/blog2', function () {
    return view('blog.blog2');
});
Route::get('/blog/blog3', function () {
    return view('blog.blog3');
});
Route::get('/blog/blog4', function () {
    return view('blog.blog4');
});
Route::get('/blog/blog5', function () {
    return view('blog.blog5');
});
Route::get('/blog/blog6', function () {
    return view('blog.blog6');
});



// Admin

use App\Http\Controllers\TrabajoController;


Route::get('admin/trabajos', [TrabajoController::class, 'index'])->name('trabajos.index');

Route::get('admin/trabajos/create', [TrabajoController::class, 'create'])->name('trabajos.create');

// Ruta para almacenar un nuevo trabajo
Route::post('admin/trabajos', [TrabajoController::class, 'store'])->name('trabajos.store');

Route::get('admin/trabajos/{trabajo}/edit', [TrabajoController::class, 'edit'])->name('trabajos.edit');

// Ruta para actualizar un trabajo existente
Route::put('admin/trabajos/{trabajo}', [TrabajoController::class, 'update'])->name('trabajos.update');

Route::delete('admin/trabajos/{trabajo}', [TrabajoController::class, 'destroy'])->name('trabajos.destroy');


Route::view('/login', 'admin.login')->name('login');
Route::view('/registro', 'admin.register')->name('registro');

Route::post('/validar-registro', [LoginController::class, 'register'])->name('validar-registro');
Route::post('/inicia-sesion', [LoginController::class, 'login'])->name('inicia-sesion');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

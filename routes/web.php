<?php

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


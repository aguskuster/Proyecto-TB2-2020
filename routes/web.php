<?php

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
    return view('home');
});


Route::get('/Clientes', function () {
    return view('clientes');
});

Route::get('/Empleados', function () {
    return view('empleados');
});


Route::get('/Compras', function () {
    return view('compras');
});

Route::get('/Ventas', function () {
    return view('ventas');
});

Route::get('/Insumos', function () {
    return view('insumos');
});


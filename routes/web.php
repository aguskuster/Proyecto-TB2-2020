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
    return view('cliente');
});

Route::get('/Empleados', function () {
    return view('empleado');
});


Route::get('/Compras', function () {
    return view('compra');
});

Route::get('/Ventas', function () {
    return view('venta');
});

Route::get('/Insumos', function () {
    return view('insumo');
});


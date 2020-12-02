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


// VISTAS PRINCIPALES 

Route::get('/', function () {
    return view('home');
});


Route::get('/Cliente','clienteController@listarClientes');

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


// FORMULARIOS 

Route::get('/altaCliente', function () {
    return view('formularios/altaCliente');
});

Route::post('/altaCliente','clienteController@altaCliente');
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

Route::get('/Empleado','empleadoController@listarEmpleados' );



Route::get('/Compra', function () {
    return view('compra');
});

Route::get('/Venta', function () {
    return view('venta');
});

Route::get('/Insumo', function () {
    return view('insumo');
});


// FORMULARIOS 

Route::get('/altaCliente', function () {
    return view('formularios/altaCliente');
});

Route::post('/altaCliente','clienteController@altaCliente');

Route::get('/altaEmpleado', function () {
    return view('formularios/altaEmpleado');
});

Route::post('/altaEmpleado', 'empleadoController@altaEmpleado');
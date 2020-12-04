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

Route::get('/Insumos','insumosController@listarInsumos' );

Route::get('/Compra', function () {
    return view('compra');
});

Route::get('/Venta','ventaController@cargarDatosVenta' );

Route::get('/Stock', function () {
    return view('stock');
});


// FORMULARIOS Alta

Route::get('/altaCliente', function () {
    return view('formulariosAlta/altaCliente');
});
Route::post('/altaCliente','clienteController@altaCliente');



Route::get('/altaEmpleado', function () {
    return view('formulariosAlta/altaEmpleado');
});

Route::post('/altaEmpleado', 'empleadoController@altaEmpleado');



Route::get('/altaInsumo', function () {
    return view('formulariosAlta/altaInsumo');
});


Route::post('/altaInsumo', 'insumosController@altaInsumo');


Route::post('/altaVenta', 'ventaController@altaVenta');

Route::get('/historialVenta', 'ventaController@listarHistorialVenta');

// FORMULARIOS Modificar


Route::post('/modificarCliente', 'clienteController@modificarCliente');

Route::get('/modificarCliente/{id}', 'clienteController@listarClienteParaModificar');



Route::post('/modificarEmpleado', 'empleadoController@modificarEmpleado');

Route::get('/modificarEmpleado/{id}', 'empleadoController@listarEmpleadoParaModificar');


Route::post('/modificarInsumo', 'insumosController@modificarInsumo');

Route::get('/modificarInsumo/{id}', 'insumosController@listarInsumoParaModificar');

Route::post('/modificarVenta', 'ventaController@modificarVenta');

Route::get('/modificarVenta/{id}', 'ventaController@listarVentaParaModificar');





// FORMULARIOS Baja

Route::post('/bajaCliente', 'clienteController@eliminarCliente');

Route::get('/bajaCliente/{id}', 'clienteController@listarClienteParaEliminar') ;


Route::post('/bajaEmpleado', 'empleadoController@eliminarEmpleado');

Route::get('/bajaEmpleado/{id}', 'empleadoController@listarEmpleadoParaEliminar') ;


Route::post('/bajaInsumo', 'insumosController@eliminarInsumo');

Route::get('/bajaInsumo/{id}', 'insumosController@listarInsumoParaEliminar') ;

Route::post('/bajaVenta', 'ventaController@eliminarVenta');

Route::get('/bajaVenta/{id}', 'ventaController@listarVentaParaEliminar') ;
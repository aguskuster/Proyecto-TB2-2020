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


// LOGIN 

Route::get('/login', function () {
    return view('login');
});

Route::post('/login','empleadoController@autenticarEmpleado');









// VISTAS PRINCIPALES 

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

// LISTADOS
Route::get('/Cliente','clienteController@listarClientes');

Route::get('/Empleado','empleadoController@listarEmpleados' );

Route::get('/Insumos','insumosController@listarInsumos' );

Route::get('/historialVenta', 'ventaController@listarHistorialVenta');

Route::get('/historialDeCompra', 'comprasController@listarHistorialCompra'); 

Route::get('/Stock','comprasController@listarStock');



// LISTADOS Especiales
Route::get('/Compra','comprasController@cargarDatosCompra')->middleware('autenticacion');
//
Route::get('/Venta','ventaController@cargarDatosVenta' )->middleware('autenticacion');




// FORMULARIOS Alta

Route::get('/altaCliente', function () {
    return view('formulariosAlta/altaCliente');
})->middleware('autenticacion');

Route::post('/altaCliente','clienteController@altaCliente')->middleware('autenticacion');



Route::get('/altaEmpleado', function () {
    return view('formulariosAlta/altaEmpleado');
})->middleware('autenticacion');

Route::post('/altaEmpleado', 'empleadoController@altaEmpleado')->middleware('autenticacion');



Route::get('/altaInsumo', function () {
    return view('formulariosAlta/altaInsumo');
})->middleware('autenticacion');

Route::post('/altaInsumo', 'insumosController@altaInsumo')->middleware('autenticacion');




Route::post('/altaVenta', 'ventaController@altaVenta')->middleware('autenticacion');


Route::post('/altaCompra', 'comprasController@altaCompra')->middleware('autenticacion');





// FORMULARIOS Modificar


Route::post('/modificarCliente', 'clienteController@modificarCliente')->middleware('autenticacion');

Route::get('/modificarCliente/{id}', 'clienteController@listarClienteParaModificar')->middleware('autenticacion');



Route::post('/modificarEmpleado', 'empleadoController@modificarEmpleado');

Route::get('/modificarEmpleado/{id}', 'empleadoController@listarEmpleadoParaModificar')->middleware('autenticacion');



Route::post('/modificarInsumo', 'insumosController@modificarInsumo')->middleware('autenticacion');

Route::get('/modificarInsumo/{id}', 'insumosController@listarInsumoParaModificar')->middleware('autenticacion');



Route::post('/modificarVenta', 'ventaController@modificarVenta')->middleware('autenticacion');

Route::get('/modificarVenta/{id}', 'ventaController@listarVentaParaModificar')->middleware('autenticacion');



Route::get('/modificarStock/{id}', 'comprasController@listarProductoParaModificar')->middleware('autenticacion');

Route::post('/modificarStock', 'comprasController@modificarStock')->middleware('autenticacion');




// FORMULARIOS Baja

Route::post('/bajaCliente', 'clienteController@eliminarCliente')->middleware('autenticacion');

Route::get('/bajaCliente/{id}', 'clienteController@listarClienteParaEliminar')->middleware('autenticacion') ;



Route::post('/bajaEmpleado', 'empleadoController@eliminarEmpleado')->middleware('autenticacion');

Route::get('/bajaEmpleado/{id}', 'empleadoController@listarEmpleadoParaEliminar')->middleware('autenticacion') ;



Route::post('/bajaInsumo', 'insumosController@eliminarInsumo')->middleware('autenticacion');

Route::get('/bajaInsumo/{id}', 'insumosController@listarInsumoParaEliminar')->middleware('autenticacion') ;



Route::post('/bajaVenta', 'ventaController@eliminarVenta')->middleware('autenticacion');

Route::get('/bajaVenta/{id}', 'ventaController@listarVentaParaEliminar')->middleware('autenticacion');



Route::get('/bajaStock/{id}', 'comprasController@listarProductoParaEliminar')->middleware('autenticacion') ; 

Route::post('/bajaStock', 'comprasController@eliminarStock')->middleware('autenticacion'); 



// GENERAR Reportes


Route::get('/generarCompraPDF/{id}','pdfController@generarPDFIndividualVenta')->middleware('autenticacion');

Route::get('/generarCompraPDFFiltrado','pdfController@generarPDFCompraFiltrado')->middleware('autenticacion');



Route::get('/generarVentaPDF/{id}','pdfController@generarPDFIndividualVenta')->middleware('autenticacion');

Route::get('/generarVentaPDFFiltrado','pdfController@generarPDFVentaFiltrado')->middleware('autenticacion');

Route::get('/generarPDFstock','pdfController@generarPDFStock')->middleware('autenticacion');
// LOGOUT Empleado

Route::get('/logout','empleadoController@logout');
@include('templates/header')

<div class="container">

    @isset($ventaSeleccionadoEliminar)

    
   
    <br><br>
    <h3 class="text-center">Eliminar Venta</h3>

    <form action="/bajaVenta" method="post" class="needs-validation">

        @csrf

        <div class="form-group">
            <label for="inputID">ID</label>
            <input id="inputID" type="text" class="form-control" name="id" value="{{ $ventaSeleccionadoEliminar -> id }} " readonly>
        </div>

        <div class="form-group">
            <label for="inputClienteNombre">Cliente Nombre</label>
            <input type="text" class="form-control" name="clienteNombre" id="inputclienteNombre" value="{{ $ventaSeleccionadoEliminar -> clienteNombre }}"  readonly>
        </div>

        <div class="form-group">
            <label for="inputClienteRUT">RUT</label>
            <input type="text" class="form-control" name="clienteRUT" id="inputClienteRUT"
            value="{{ $ventaSeleccionadoEliminar -> clienteRUT }}"  readonly>
        </div>

        <div class="form-group">
            <label for="inputInsumoNombre">Producto</label>
            <input type="text" class="form-control" name="insumoNombre" id="insumoNombre"
            value="{{ $ventaSeleccionadoEliminar -> insumoNombre }}"  readonly>
        </div>  

        <div class="form-group">
            <label for="inputInsumoPrecio">Precio</label>
            <input type="text" class="form-control" name="insumoPrecio" id="insumoPrecio"
            value="{{ $ventaSeleccionadoEliminar -> insumoPrecio }}"  readonly>
        </div>

        <div class="form-group">
            <label for="inputInsumoCantidad">Cantidad</label>
            <input type="text" class="form-control" name="insumoCantidad" id="insumoCantidad"
            value="{{ $ventaSeleccionadoEliminar -> insumoCantidad }}"  readonly>
        </div>

        <div class="form-group">
            <label for="inputEmpleadoNombre">Empleado</label>
            <input type="text" class="form-control" name="empleadoNombre" id="empleadoNombre"
            value="{{ $ventaSeleccionadoEliminar -> empleadoNombre }}"  readonly>
        </div>



        <button type="submit" class="btn btn-danger">Eliminar Venta</button>
    </form>
    @endisset
</div>

@include('templates/footer')

@include('templates/header')

<div class="container">

    @isset($ventaSeleccionado)

    
   
    <br><br>
    <h3 class="text-center">Modificar Venta</h3>

    <form action="/modificarVenta" method="post" class="needs-validation">

        @csrf

        <div class="form-group">
            <label for="inputID">ID</label>
            <input id="inputID" type="text" class="form-control" name="id" value="{{ $ventaSeleccionado -> id }} " readonly>
        </div>

        <div class="form-group">
            <label for="inputClienteNombre">Cliente Nombre</label>
            <input type="text" class="form-control" name="clienteNombre" id="inputclienteNombre" value="{{ $ventaSeleccionado -> clienteNombre }}"  required>
        </div>

        <div class="form-group">
            <label for="inputClienteRUT">RUT</label>
            <input type="text" class="form-control" name="clienteRUT" id="inputClienteRUT"
            value="{{ $ventaSeleccionado -> clienteRUT }}"  required>
        </div>

        <div class="form-group">
            <label for="inputInsumoNombre">Producto</label>
            <input type="text" class="form-control" name="insumoNombre" id="insumoNombre"
            value="{{ $ventaSeleccionado -> insumoNombre }}"  required>
        </div>  

        <div class="form-group">
            <label for="inputInsumoPrecio">Precio</label>
            <input type="text" class="form-control" name="insumoPrecio" id="insumoPrecio"
            value="{{ $ventaSeleccionado -> insumoPrecio }}"  required>
        </div>

        <div class="form-group">
            <label for="inputInsumoCantidad">Cantidad</label>
            <input type="text" class="form-control" name="insumoCantidad" id="insumoCantidad"
            value="{{ $ventaSeleccionado -> insumoCantidad }}"  required>
        </div>

        <div class="form-group">
            <label for="inputEmpleadoNombre">Empleado</label>
            <input type="text" class="form-control" name="empleadoNombre" id="empleadoNombre"
            value="{{ $ventaSeleccionado -> empleadoNombre }}"  required>
        </div>



        <button type="submit" class="btn btn-info">Modificar Venta</button>
    </form>
    @endisset
</div>

@include('templates/footer')

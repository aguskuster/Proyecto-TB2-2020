@include('templates/header')

<div class="container">

    @isset($compraSeleccionadoEliminar)

    
   
    <br><br>
    <h3 class="text-center">Eliminar Compra</h3>

    <form action="/bajaCompra" method="post" class="needs-validation">

        @csrf

        <div class="form-group">
            <label for="inputID">ID</label>
            <input id="inputID" type="text" class="form-control" name="id" value="{{ $compraSeleccionadoEliminar -> id }} " readonly>
        </div>

        <div class="form-group">
            <label for="inputClienteProveedor">Proveedor</label>
            <input type="text" class="form-control" name="proveedor" id="inputClienteProveedor" value="{{ $compraSeleccionadoEliminar -> proveedor }}"  readonly>
        </div>

        <div class="form-group">
            <label for="inputCategoria">Categoria</label>
            <input type="text" class="form-control" name="categoria" id="inputCategoria"
            value="{{ $compraSeleccionadoEliminar -> categoria }}"  readonly>
        </div>

        <div class="form-group">
            <label for="inputProducto">Producto</label>
            <input type="text" class="form-control" name="producto" id="inputProducto"
            value="{{ $compraSeleccionadoEliminar -> nombreProducto }}"  readonly>
        </div>  

        <div class="form-group">
            <label for="inputInsumoPrecio">Precio</label>
            <input type="text" class="form-control" name="insumoPrecio" id="insumoPrecio"
            value="{{ $compraSeleccionadoEliminar -> precioUnitario }} {{ $compraSeleccionadoEliminar -> moneda }}"  readonly>
        </div>



        <div class="form-group">
            <label for="inputCantidad">Cantidad</label>
            <input type="text" class="form-control" name="cantidad" id="inputCantidad"
            value="{{ $compraSeleccionadoEliminar -> cantidad }}"  readonly>
        </div>

        <div class="form-group">
            <label for="inputEmpleadoNombre">Empleado</label>
            <input type="text" class="form-control" name="empleadoNombre" id="empleadoNombre"
            value="{{ $compraSeleccionadoEliminar -> empleado }}"  readonly>
        </div>



        <button type="submit" class="btn btn-danger">Eliminar Compra</button>
    </form>
    @endisset
</div>

@include('templates/footer')
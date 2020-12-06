@include('templates/header')

<div class="container">

    @isset($StockSeleccionadoEliminar)

    
   
    <br><br>
    <h3 class="text-center">Eliminar Stock</h3>

    <form action="/bajaStock" method="post" class="needs-validation">

        @csrf

        <div class="form-group">
            <label for="inputID">ID</label>
            <input id="inputID" type="text" class="form-control" name="id" value="{{ $StockSeleccionadoEliminar -> id }} " readonly>
        </div>

        <div class="form-group">
            <label for="inputproveedor">Proveedor</label>
            <input type="text" class="form-control" name="proveedor" id="proveedor" value="{{ $StockSeleccionadoEliminar -> proveedor }}"  readonly>
        </div>

        <div class="form-group">
            <label for="inputcategoria">Categoria</label>
            <input type="text" class="form-control" name="categoria" id="categoria" readonly
            value="{{ $StockSeleccionadoEliminar -> categoria }}">
        </div>

        <div class="form-group">
            <label for="inputNombreProducto">Nombre Producto</label>
            <input type="text" class="form-control" name="nombreProducto" id="nombreProducto" readonly
            value="{{ $StockSeleccionadoEliminar -> nombreProducto }}"  >
        </div>  

        <div class="form-group">
            <label for="inputPrecioUnitario">Precio Unitario</label>
            <input type="number" class="form-control" name="precioUnitario" id="precioUnitario" readonly
            value="{{ $StockSeleccionadoEliminar -> precioUnitario }}"  >
        </div>

        <div class="form-group">
            <label for="inputMoneda">Moneda</label>
            <input type="text" class="form-control" name="moneda" id="moneda"
            value="{{ $StockSeleccionadoEliminar -> moneda }}"  readonly>
        </div>

        <div class="form-group">
            <label for="inputCantidad">Cantidad</label>
            <input type="number" class="form-control" name="cantidad" id="cantidad"
            value="{{ $StockSeleccionadoEliminar -> cantidad }}"  readonly>
        </div>
        <button type="submit" class="btn btn-danger">Eliminar Stock</button>
    </form>
    @endisset
</div>

@include('templates/footer')

@include('templates/header')

<div class="container">

    @isset($StockSeleccionadoModificar)

    
   
    <br><br>
    <h3 class="text-center">Modificar Stock</h3>

    <form action="/modificarStock" method="post" class="needs-validation">

        @csrf

        <div class="form-group">
            <label for="inputID">ID</label>
            <input id="inputID" type="text" class="form-control" name="id" value="{{ $StockSeleccionadoModificar -> id }} " readonly>
        </div>

        <div class="form-group">
            <label for="inputproveedor">Proveedor</label>
            <input type="text" class="form-control" name="proveedor" id="proveedor" value="{{ $StockSeleccionadoModificar -> proveedor }}"  >
        </div>

        <div class="form-group">
            <label for="inputcategoria">Categoria</label>
            <input type="text" class="form-control" name="categoria" id="categoria" onkeypress="return isNumericKey(event)"
            value="{{ $StockSeleccionadoModificar -> categoria }}">
        </div>

        <div class="form-group">
            <label for="inputNombreProducto">Nombre Producto</label>
            <input type="text" class="form-control" name="nombreProducto" id="nombreProducto"
            value="{{ $StockSeleccionadoModificar -> nombreProducto }}"  >
        </div>  

        <div class="form-group">
            <label for="inputPrecioUnitario">Precio Unitario</label>
            <input type="number" class="form-control" name="precioUnitario" id="precioUnitario"
            value="{{ $StockSeleccionadoModificar -> precioUnitario }}"  >
        </div>

        <div class="form-group">
            <label for="inputMoneda">Moneda</label>
            <input type="text" class="form-control" name="moneda" id="moneda"
            value="{{ $StockSeleccionadoModificar -> moneda }}"  readonly>
        </div>

        <div class="form-group">
            <label for="inputCantidad">Cantidad</label>
            <input type="number" class="form-control" name="cantidad" id="cantidad"
            value="{{ $StockSeleccionadoModificar -> cantidad }}"  >
        </div>
        <button type="submit" class="btn btn-info">Modificar Stock</button>
    </form>
    @endisset
</div>

@include('templates/footer')

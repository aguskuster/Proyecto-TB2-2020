@include('templates/header')

<div class="container">

    @isset($StockSeleccionadoModificar)

    
   
    <br><br>
    <h3 class="text-center">Modificar Stock</h3>

    <form action="/modificarStock" method="post" class="needs-validation">

        @csrf

        <div class="form-group">
            
            <input id="id" type="text" class="form-control" name="id" value="{{ $StockSeleccionadoModificar -> id }}" hidden>
        </div>

        <div class="form-group">
            <label for="inputModificarMarca">Marca</label>
            <input type="text" class="form-control" name="inputModificarMarca" id="inputModificarMarca" value="{{ $StockSeleccionadoModificar -> proveedor }}"  >
        </div>

        <div class="form-group">
            <label for="inputModificarCategoria">Categoria</label>
            <input type="text" class="form-control" name="inputModificarCategoria" id="inputModificarCategoria" onkeypress="return isNumericKey(event)"
            value="{{ $StockSeleccionadoModificar -> categoria }}">
        </div>

        <div class="form-group">
            <label for="inputModificarNombreProducto">Nombre Producto</label>
            <input type="text" class="form-control" name="inputModificarNombreProducto" id="inputModificarNombreProducto"
            value="{{ $StockSeleccionadoModificar -> nombreProducto }}"  >
        </div>  

        <div class="form-group">
            <label for="inputModificarPrecioUnitario">Precio Unitario</label>
            <input type="number" class="form-control" name="inputModificarPrecioUnitario" id="inputModificarPrecioUnitario"
            value="{{ $StockSeleccionadoModificar -> precioUnitario }}"  >
        </div>

        <div class="form-group">
            <label for="inputModificarMoneda">Moneda</label>
            <input type="text" class="form-control" name="inputModificarMoneda" id="inputModificarMoneda"
            value="{{ $StockSeleccionadoModificar -> moneda }}"  readonly>
        </div>

        <div class="form-group">
            <label for="inputModificarCantidad">Cantidad</label>
            <input type="number" class="form-control" name="inputModificarCantidad" id="inputModificarCantidad"
            value="{{ $StockSeleccionadoModificar -> cantidad }}"  >
        </div>
        <button type="submit" class="btn btn-info">Modificar Stock</button>
    </form>
    @endisset
</div>

@include('templates/footer')

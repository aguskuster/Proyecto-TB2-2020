@include('templates/header')

<div class="container">

    @isset($compraHistorial)

    
   
    <br><br>
    <h3 class="text-center">Modificar Historial de Compra</h3>

    <form action="/modificarHisotrialCompra" method="post" class="needs-validation">

        @csrf

        <div class="form-group">
            <label for="inputID">ID</label>
            <input id="inputID" type="text" class="form-control" name="id" value="{{ $compraHistorial -> id }} " readonly>
        </div>

        <div class="form-group">
            <label for="inputProveedor">Proveedor</label>
            <input type="text" class="form-control" name="proveedor" id="inputProveedor" value="{{ $compraHistorial -> proveedor }}"  required>
        </div>

        <div class="form-group">
            <label for="inputCategoria">Categoria</label>
            <input type="text" class="form-control" name="categoria" id="inputCategoria"
            value="{{ $compraHistorial -> categoria }}"  required>
        </div>

        <div class="form-group">
            <label for="inputNombreProducto">Nombre Producto</label>
            <input type="text" class="form-control" name="nombreProducto" id="nombreProducto"
            value="{{ $compraHistorial -> nombreProducto }}"  required>
        </div>  

        <div class="form-group">
            <label for="inputPrecioUnitario">Precio Unitario</label>
            <input type="text" class="form-control" name="precioUnitario" id="precioUnitario"
            value="{{ $compraHistorial -> precioUnitario }}"  required>
        </div>

        <div class="form-group">
            <label for="inputmoneda">Moneda</label>
            <input type="text" class="form-control" name="moneda" id="moneda"
            value="{{ $compraHistorial -> moneda }}"  required>
        </div>

        <div class="form-group">
            <label for="inputcantidad">Cantidad</label>
            <input type="text" class="form-control" name="cantidad" id="cantidad"
            value="{{ $compraHistorial -> cantidad }}"  required>
        </div>
        <div class="form-group">
            <label for="inputempleado">empleado</label>
            <input type="text" class="form-control" name="empleado" id="empleado"
            value="{{ $compraHistorial -> empleado }}"  required>
        </div>
       


        <button type="submit" class="btn btn-info">Modificar Historial de Compra</button>
    </form>
    @endisset
</div>

@include('templates/footer')

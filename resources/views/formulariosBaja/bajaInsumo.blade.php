@include('templates/header')

<div class="container">

    @isset($InsumoSeleccionadoEliminar)

    
   
    <br><br>
    <h3 class="text-center">Eliminar Insumo</h3>

    <form action="/bajaInsumo" method="post" class="needs-validation">

        @csrf

        <div class="form-group">
            <label for="inputID">ID</label>
            <input id="inputID" type="text" class="form-control" name="id" value="{{ $InsumoSeleccionadoEliminar -> id }} " readonly>
        </div>

        <div class="form-group">
            <label for="inputMarca">Marca</label>
            <input type="text" class="form-control" name="marca" id="inputmarca" value="{{ $InsumoSeleccionadoEliminar -> marca }}"  readonly>
        </div>

        <div class="form-group">
            <label for="inputCategoria">Categoria</label>
            <input type="text" class="form-control" name="categoria" id="inputCategoria"
            value="{{ $InsumoSeleccionadoEliminar -> categoria }}"  readonly>
        </div>

        <div class="form-group">
            <label for="inputNombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="inputNombre"
            value="{{ $InsumoSeleccionadoEliminar -> nombre }}"  readonly>
        </div>  

        <div class="form-group">
            <label for="inputPrecio">Precio</label>
            <input type="text" class="form-control" name="precio" id="inputPrecio"
            value="{{ $InsumoSeleccionadoEliminar -> precio }}"  readonly>
        </div>

        <div class="form-group">
            <label for="inputMoneda">Moneda</label>
            <input type="text" class="form-control" name="moneda" id="inputMoneda"
            value="{{ $InsumoSeleccionadoEliminar -> moneda }}"  readonly>
        </div>

        <button type="submit" class="btn btn-danger">Eliminar Insumo</button>
    </form>
    @endisset
</div>

@include('templates/footer')

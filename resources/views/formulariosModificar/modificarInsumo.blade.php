@include('templates/header')

<div class="container">

    @isset($InsumoSeleccionadoModificar)

    
   
    <br><br>
    <h3 class="text-center">Modificar Insumo</h3>

    <form action="/modificarInsumo" method="post" class="needs-validation">

        @csrf

        <div class="form-group">
            <label for="inputID">ID</label>
            <input id="inputID" type="text" class="form-control" name="id" value="{{ $InsumoSeleccionadoModificar -> id }} " readonly>
        </div>

        <div class="form-group">
            <label for="inputMarca">Marca</label>
            <input type="text" class="form-control" name="marca" id="inputmarca" value="{{ $InsumoSeleccionadoModificar -> marca }}"  required>
        </div>

        <div class="form-group">
            <label for="inputCategoria">Categoria</label>
            <input type="text" class="form-control" name="categoria" id="inputCategoria"
            value="{{ $InsumoSeleccionadoModificar -> categoria }}"  required>
        </div>

        <div class="form-group">
            <label for="inputNombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="inputNombre"
            value="{{ $InsumoSeleccionadoModificar -> nombre }}"  required>
        </div>  

        <div class="form-group">
            <label for="inputPrecio">Precio</label>
            <input type="text" class="form-control" name="precio" id="inputPrecio"
            value="{{ $InsumoSeleccionadoModificar -> precio }}"  required>
        </div>

        <div class="form-group">
            <label for="inputMoneda">Moneda</label>
            <input type="text" class="form-control" name="moneda" id="inputMoneda"
            value="{{ $InsumoSeleccionadoModificar -> moneda }}"  required>
        </div>

        <button type="submit" class="btn btn-info">Modificar Insumo</button>
    </form>
    @endisset
</div>

@include('templates/footer')

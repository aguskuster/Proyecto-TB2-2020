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
        @error('marca')
        <div class="alert alert-danger">
            Marca invalida
        </div>
        @enderror
        <div class="form-group">
            <label for="inputMarca">Marca</label>
            <input type="text" class="form-control" name="marca" id="inputmarca" value="{{ $InsumoSeleccionadoModificar -> marca }}"  >
        </div>
        @error('categoria')
        <div class="alert alert-danger">
            Categoria invalida
        </div>
        @enderror
        <div class="form-group">
            <label for="inputCategoria">Categoria</label>
            <input type="text" class="form-control" name="categoria" id="inputCategoria" onkeypress="return isNumericKey(event)"
            value="{{ $InsumoSeleccionadoModificar -> categoria }}"  >
        </div>
        @error('nombre')
        <div class="alert alert-danger">
            Nombre invalido
        </div>
        @enderror
        <div class="form-group">
            <label for="inputNombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="inputNombre"
            value="{{ $InsumoSeleccionadoModificar -> nombre }}"  >
        </div>  
        @error('precio')
        <div class="alert alert-danger">
            Precio invalido
        </div>
        @enderror
        <div class="form-group">
            <label for="inputPrecio">Precio</label>
            <input type="number" class="form-control" name="precio" id="inputPrecio"
            value="{{ $InsumoSeleccionadoModificar -> precio }}"  >
        </div>

        <div class="form-group">
            <label for="inputMoneda">Moneda</label>
            <input type="text" class="form-control" name="moneda" id="inputMoneda"
            value="{{ $InsumoSeleccionadoModificar -> moneda }}"  readonly>
        </div>

        <button type="submit" class="btn btn-info">Modificar Insumo</button>
    </form>
    @endisset
</div>

@include('templates/footer')

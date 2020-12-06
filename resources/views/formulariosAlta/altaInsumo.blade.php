@include('templates/header')


<div class="container">

    @isset($insumoAgregado)

        <script>
            alert("Insumo Agregado")
        </script>

    @endisset
    <br><br>
    <h3 class="text-center">Agregar Insumo</h3>

    <form action="/altaInsumo" method="post" class="needs-validation">
        @csrf
        @error('marca')
        <div class="alert alert-danger">
            Marca invalida
        </div>
        @enderror
        <div class="form-group">
            <label for="inputMarca">Marca<em>*</em></label>
            <input type="text" class="form-control" name="marca" id="inputMarca" placeholder="Ingrese Marca" value={{old ('marca')}}>
        </div>
        @error('categoria')
        <div class="alert alert-danger">
            Categoria invalida
        </div>
        @enderror
        <div class="form-group">
            <label for="inputCategoria">Categoria<em>*</em></label>
            <input type="text" class="form-control" name="categoria" id="inputCategoria" placeholder="Ingrese Categoria" onkeypress="return isNumericKey(event)"
            value={{old ('categoria')}}>
        </div>
        @error('nombre')
        <div class="alert alert-danger">
            Nombre invalido
        </div>
        @enderror
        <div class="form-group">
            <label for="inputNombre">Nombre<em>*</em></label>
            <input type="text" class="form-control" name="nombre" id="inputNombre" placeholder="Ingrese Nombre" value={{old ('nombre')}}>
        </div>
        @error('precio')
        <div class="alert alert-danger">
            Precio invalido
        </div>
        @enderror
        <div class="form-group">
            <label for="inputPrecio">Precio<em>*</em></label>
            <input type="number" class="form-control" name="precio" id="inputPrecio" placeholder="Ingrese Precio" value={{old ('precio')}}>
        </div>

        <div class="form-group">
            <label for="inputMoneda">Moneda<em>*</em></label>
            <input type="text" class="form-control" name="moneda" id="inputMoneda" value="USD"
            readonly>
        </div>

        <button type="submit" class="btn btn-info">Agregar</button>
    </form>

</div>

@include('templates/footer')

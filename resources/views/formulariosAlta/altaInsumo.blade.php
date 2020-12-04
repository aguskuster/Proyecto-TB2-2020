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
        <div class="form-group">
            <label for="inputMarca">Marca</label>
            <input type="text" class="form-control" name="marca" id="inputMarca" placeholder="Ingrese Marca" required>
        </div>
        <div class="form-group">
            <label for="inputCategoria">Categoria</label>
            <input type="text" class="form-control" name="categoria" id="inputCategoria" placeholder="Ingrese Categoria"
                required>
        </div>

        <div class="form-group">
            <label for="inputNombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="inputNombre" placeholder="Ingrese Nombre"
                required>
        </div>

        <div class="form-group">
            <label for="inputPrecio">Precio</label>
            <input type="text" class="form-control" name="precio" id="inputPrecio" placeholder="Ingrese Precio"
                required>
        </div>

        <div class="form-group">
            <label for="inputMoneda">Moneda</label>
            <input type="text" class="form-control" name="moneda" id="inputMoneda" value="USD"
            required readonly>
        </div>

        <button type="submit" class="btn btn-info">Agregar</button>
    </form>

</div>

@include('templates/footer')

@include('templates/header')

<div class="container">

    @isset($compraCreada)

        <script>
            alert("Cliente Creado")

        </script>

    @endisset

    <br><br>
    <h3 class="text-center">Ventas de Insumos</h3>
    <br><br><br>

    <div class="container" style="background:whitesmoke;padding:10px;">

        <form action="/altaVenta" method="post" class="needs-validation">

            @csrf

            <div class="form-group">
                <label for="selectCliente">Cliente</label>
                <select name="cliente" id="selectCliente" class="form-control">

                    @foreach ($datos[2] as $c)
                        <option>{{ $c->rut }}</option>

                    @endforeach
                </select>

            </div>

            <div class="form-group">
                <label for="selectCliente">Cliente</label>
                <select name="cliente" id="selectCliente" class="form-control">

                    @foreach ($datos[2] as $c)
                        <option>{{ $c->empresa }}</option>

                    @endforeach
                </select>

            </div>

            <div class="form-group">
                <label for="selectProductoNombre">Nombre Producto</label>
                <select name="productoNombre" id="selectProductoNombre" class="form-control">

                    @foreach ($datos[0] as $p)
                        <option>{{ $p->nombre }}</option>

                    @endforeach
                </select>

            </div>

            <div class="form-group">
                <label for="selectPrecioUnitario">Precio Unitario</label>
                <select name="precioUnitarioInsumo" id="selectPrecioUnitario" class="form-control">

                    @foreach ($datos[0] as $p)

                        <option>{{ $p->precio }}</option>

                    @endforeach
                </select>

            </div>

            <div class="form-group">
                <label for="selectProductoNombre">Nombre Producto</label>
                <input type="text" class="form-control" name="cantidad" id="selectProductoNombre" placeholder="Cantidad" required>
            </div>



            <div class="form-group">
                <label for="selectVendedor">Vendedor</label>
                <select name="vendedor" id="selectVendedor" class="form-control">

                    @foreach ($datos[1] as $e)


                        <option>{{ $e->nombre }} {{ $e->apellido }}</option>
                    @endforeach
                </select>

            </div>


            <button type="submit" class="btn btn-info">Agregar</button>
        </form>

    </div>
</div>


@include('templates/footer')

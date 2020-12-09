@include('templates/header')


<div class="container-fluid">

    <br><br>
    <h3 class="text-center">Compra de Productos</h3>
    <br><br><br>

    <div class="container" style="background:whitesmoke;padding:15px;margin:auto;">

     

        <form action="/altaCompra" method="post" class="needs-validation">
            @csrf
            <div class="form-group">
                <label for="inputProductoMarca">Marca</label>

                <input type="text" class="form-control" style="width:90%" name="inputProductoMarca"
                    id="inputProductoMarca" placeholder="Marca del producto" required>

            </div>

            <div class="form-group">
                <label for="inputProductoCategoria">Categoria</label>

                <input type="text" class="form-control" style="width:90%" name="inputProductoCategoria"
                    id="inputProductoCategoria" placeholder="Categoria del producto" required>

            </div>

            <div class="form-group">
                <label for="inputProductoNombre">Producto</label>

                <input type="text" class="form-control" style="width:90%" name="inputProductoNombre"
                    id="inputProductoNombre" placeholder="Nombre del producto" required>

            </div>

            <div class="form-group">
                <label for="inputPrecioUnitario">Precio</label> <br>

                <input type="text" style="width:60%" class="form-control inline-block float-left"
                    name="inputPrecioUnitario" id="inputPrecioUnitario" placeholder="Precio del producto" required>

                <input type="text" style="margin-left:10px;width:29%" class="form-control inline-block float-left"
                    name="inputMoneda" id="inputMoneda" value="USD" readonly>

            </div>


            <br>
            <div class="form-group">
                <label for="inputProductoCantidad">Cantidad</label>

                <input type="text" class="form-control" style="width:90%" name="inputProductoCantidad"
                    id="inputProductoCantidad" placeholder="Cantidad" required>

            </div>


            <div class="form-group">
                <label for="selectVendedor">Empleado</label>
                <select name="selectVendedor" id="selectVendedor" class="form-control" style="width:90%">

                    @foreach ($empleados as $e)

                        <option value="{{ $e->nombre }} {{ $e->apellido }}">{{ $e->nombre }} {{ $e->apellido }}</option>

                    @endforeach

                </select>

            </div>
            <div class="form-group">

                <input type="submit" class="btn btn-lng btn-success float-right" value="Comprar"
                    style="margin-right:10%">
            </div>
            <br><br>

        </form>



        <a href="/historialDeCompra">Ver historial de compra</a>

    </div>


</div>


@include('templates/footer')

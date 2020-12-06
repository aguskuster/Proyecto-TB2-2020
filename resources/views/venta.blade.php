@include('templates/header')

<div class="container">

   

    <br><br>
    <h3 class="text-center">Ventas de Insumos</h3>
    <br><br><br>

    <div class="container" style="background:whitesmoke;padding:10px;border-radius:10px;">

        <form action="/altaVenta" method="post" class="needs-validation">

            @csrf

            <div class="form-group">
                <label for="selectClienteRut">Cliente RUT</label>
                <select name="selectClienteRut" id="selectClienteRut" class="form-control">

                    @foreach ($datos[2] as $c)

                        <option value="{{ $c->rut }}">{{ $c->rut }}</option>

                    @endforeach

                </select>

            </div>

            <div class="form-group">
                <label for="selectClienteNombre">Cliente Nombre</label>
                <select name="selectClienteNombre" id="selectClienteNombre" class="form-control">

                    @foreach ($datos[2] as $c)

                        <option value="{{ $c->empresa }}">{{ $c->empresa }}</option>

                    @endforeach

                </select>

            </div>

            <div class="form-group">
                <label for="selectProductoNombre">Nombre Producto</label>
                <select name="selectProductoNombre" id="selectProductoNombre" class="form-control">

                    @foreach ($datos[0] as $p)

                        <option value="{{ $p->nombreProducto }}"> {{ $p->nombreProducto }} </option>

                    @endforeach

                </select>

            </div>

            <div class="form-group">
                <label for="selectPrecioUnitario">Precio Unitario</label>
                <select name="selectPrecioUnitario" id="selectPrecioUnitario" class="form-control">

                    @foreach ($datos[0] as $p)

                        <option value="{{ $p->precioUnitario }} "> {{ $p->precioUnitario }} {{ $p->moneda }}</option>

                    @endforeach

                </select>

            </div>

            <div class="form-group">
                <label for="selectProductoCantidad">Cantidad</label>
                <input type="text" class="form-control" name="selectProductoCantidad" id="selectProductoCantidad" value="1"
                    required>
            </div>



            <div class="form-group">
                <label for="selectVendedor">Vendedor</label>
                <select name="selectVendedor" id="selectVendedor" class="form-control">

                    @foreach ($datos[1] as $e)

                        <option value="{{ $e->nombre }} {{ $e->apellido }}">{{ $e->nombre }} {{ $e->apellido }}</option>

                    @endforeach

                </select>

            </div>


            <button type="submit" class="btn btn-info">Agregar</button>
        </form>

    </div>

    <br> 

    <a href="historialVenta" class="float-right">Ver el historial de ventas</a>
</div>


@include('templates/footer')

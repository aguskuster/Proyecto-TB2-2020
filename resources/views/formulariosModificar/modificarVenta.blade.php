@include('templates/header')

<div class="container">

    @isset($ventaSeleccionado)



        <br><br>
        <h3 class="text-center">Modificar Venta</h3>

        <form action="/modificarVenta" method="post" class="needs-validation">

            @csrf

            <div class="form-group">

                <input id="inputID" type="text" class="form-control" name="id" value="{{ $ventaSeleccionado->id }} " hidden>
            </div>

            <div class="form-group">
                <label for="selectClienteRut">Cliente</label>
                <select name="selectClienteRut" id="selectClienteRut" class="form-control">
                    <option value="{{ $ventaSeleccionado->clienteRUT }}">{{ $ventaSeleccionado->clienteNombre }}</option>
                    @foreach ($datos[2] as $c)

                        <option value="{{ $c->rut }}">{{ $c->empresa }}</option>

                    @endforeach

                </select>

            </div>



            <div class="form-group">
                <label for="selectProductoNombre">Producto</label>
                <select name="selectProductoNombre" id="selectProductoNombre" class="form-control">
                    <option value="{{ $ventaSeleccionado->insumoNombre }}">{{ $ventaSeleccionado->insumoNombre }} {{ $ventaSeleccionado->insumoPrecio }} USD</option>
                    @foreach ($datos[0] as $p)

                        <option value="{{ $p->nombreProducto }}"> {{ $p->nombreProducto }}: {{ $p->precioUnitario }}
                            {{ $p->moneda }}</option>

                    @endforeach

                </select>

            </div>

            <div class="form-group">
                <label for="inputInsumoCantidad">Cantidad</label>
                <input type="text" class="form-control" name="insumoCantidad" id="insumoCantidad"
                    value="{{ $ventaSeleccionado->insumoCantidad }}" required>
            </div>

            <div class="form-group">
                <label for="inputEmpleadoNombre">Empleado</label>
                <input type="text" class="form-control" name="empleadoNombre" id="empleadoNombre"
                    value="{{ $ventaSeleccionado->empleadoNombre }}" required>
            </div>



            <button type="submit" class="btn btn-info">Modificar Venta</button>
        </form>
    @endisset
</div>

@include('templates/footer')

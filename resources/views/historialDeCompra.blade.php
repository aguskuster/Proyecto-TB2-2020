@include('templates/header')

@isset($ventaCreada)

<script>
    alert("Venta Creada")

</script>

@endisset


<div class="container">
    <br><br><br>

    <h1 class="text-center">Historial de Compra</h1>

    <br><br>




    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Proveedor</th>
                <th scope="col">Categoria</th>
                <th scope="col">Producto</th>
                <th scope="col">Precio</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Empleado</th>
                <th scope="col">Fecha</th>
                <th scope="col">Modificar</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>

        @if ($compras)
        @foreach ($compras as $c)

            <tbody>
                <tr>
                    <th scope="row"> {{ $c->proveedor }} </th>
                    <td> {{ $c->categoria }} </td>
                    <td> {{ $c->nombreProducto }} </td>
                    <td> {{ $c->precioUnitario }} {{ $c->moneda }}  </td>
                    <td> {{ $c->cantidad }} </td>
                    <td> {{ $c->empleado }} </td>
                    <td> {{ $c->created_at }} </td>
                    <td><a href="/modificarCompra/{{ $c->id }}" name='id'><i style="font-size:20px;margin-left:20px;"class="fas fa-edit"></i></a></td>
                    <td><a href="/bajaCompra/{{ $c->id }}"><i style="font-size:20px;margin-left:20px;color:red;"class="fas fa-user-times"></i></a></td>
                </tr>

            </tbody>

        @endforeach
        
        @endif


    </table>







</div>

@include('templates/footer')

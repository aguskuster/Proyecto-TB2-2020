@include('templates/header')

@isset($ventaCreada)

<script>
    alert("Venta Creada")

</script>

@endisset


<div class="container">
    <br><br><br>

    <h1 class="text-center">Historial de Venta</h1>

    <br><br>

    <form action="/generarVentaPDFFiltrado" method="get" class="mb-3">
        <button type="submit" class="btn btn-danger float-right mr-1">Generar PDF</button>
        <input placeholder="año" type="number" name="anio" class="form-control d-inline float-right mr-1" style="width:10%">
        <input placeholder="mes" type="number" name="mes" class="form-control d-inline float-right mr-1" style="width:10%">
        <input placeholder="dia" type="number" name="dia" class="form-control d-inline float-right mr-1" style="width:10%">
    </form>


    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nombre Cliente</th>
                <th scope="col">RUT</th>
                <th scope="col">Producto</th>
                <th scope="col">Precio</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Empleado</th>
                <th scope="col">Fecha</th>
                <th scope="col">Modificar</th>
                <th scope="col">Eliminar</th>
                <th scope="col">PDF</th>
            </tr>
        </thead>

        @if ($ventas)
        @foreach ($ventas as $v)

            <tbody>
                <tr>
                    <th scope="row"> {{ $v->clienteNombre }} </th>
                    <td> {{ $v->clienteRUT }} </td>
                    <td> {{ $v->insumoNombre }} </td>
                    <td> {{ $v->insumoPrecio }} USD </td>
                    <td> {{ $v->insumoCantidad }} </td>
                    <td> {{ $v->empleadoNombre }} </td>
                    <td> {{ $v->dia }}/{{ $v->mes }}/{{ $v->anio }}</td>
                    <td><a href="/modificarVenta/{{ $v->id }}" name='id'><i style="font-size:20px;margin-left:20px;"class="fas fa-edit"></i></a></td>
                    <td><a href="/bajaVenta/{{ $v->id }}"><i style="font-size:20px;margin-left:20px;color:red;"class="fas fa-user-times"></i></a></td>
                    <td><a href="/generarVentaPDF/{{ $v->id }}"><i style="margin-left:10px;font-size:20px;color:red;"class="fas fa-file-pdf"></i></a></td>
                </tr>

            </tbody>

        @endforeach
        
        @endif


    </table>







</div>

@include('templates/footer')

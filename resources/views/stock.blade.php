@include('templates/header')


<div class="container">
    <br><br>
    
    <h1 class="text-center">Listado de Stock</h1>

    <br><br><br>


    <a href="/generarPDFstock"><button class="btn btn-danger float-right">Generar PDF</button></a>
    
    <table class="table">
        <thead class="thead-dark">
            <tr>

                <th scope="col">Proveedor</th>
                <th scope="col">Categoria</th>
                <th scope="col">Producto</th>
                <th scope="col">Precio</th>
                <th scope="col">Cantidad</th>
                
                <th scope="col">Modificar</th>
                <th scope="col">Eliminar</th>

            </tr>
        </thead>

        @isset ($stockHabilitado)
            @foreach ($stockHabilitado as $h)

                <tbody>
                    <tr>
                        <th scope="row"> {{ $h->proveedor }} </th>
                        <td> {{ $h->categoria }} </td>
                        <td> {{ $h->nombreProducto }} </td>
                        <td> {{ $h->precioUnitario }} {{ $h->moneda }}</td>
                        <td> {{ $h->cantidad }} </td>
                        <td><a href="/modificarStock/{{ $h->id }}"><i style="font-size:20px;margin-left:20px;"class="fas fa-edit"></i></a></td>
                        <td><a href="/bajaStock/{{ $h->id }}"><i style="font-size:20px;margin-left:20px;color:red;"class="fas fa-user-times"></i></a></td>

                    </tr>

                </tbody>

            @endforeach

        @endisset


    </table>







</div>
@include('templates/footer')
@include('templates/header')



<div class="container">
    <br><br><br>

    <h1 class="text-center">Habilitar Stock</h1>

    <br><br>

    

    <a href="/Stock" class="float-right"><i style="font-size:20px;margin-left:20px;color:blue;"class="fas fa-arrow-left" style="font-family:Roboto"> Volver Atras</i></a>
    <table class="table">
        <thead class="thead-dark">
            <tr>

                <th scope="col">Proveedor</th>
                <th scope="col">Categoria</th>
                <th scope="col">Producto</th>
                <th scope="col">Precio</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Fecha</th>
                <th scope="col">Habilitar</th>

            </tr>
        </thead>

        @if ($habilitarStock)
            @foreach ($habilitarStock as $h)

                <tbody>
                    <tr>
                        <th scope="row"> {{ $h->proveedor }} </th>
                        <td> {{ $h->categoria }} </td>
                        <td> {{ $h->nombreProducto }} </td>
                        <td> {{ $h->precioUnitario }} {{ $h->moneda }}</td>
                        <td> {{ $h->cantidad }} </td>
                        <td> {{ $h->created_at }} </td>
                        <td>
                            <form action="/altaStock/{{ $h->id }}" method="post" name="id" id="id">
                                <button type="submit" style="background:none;border:none;text-decoration:none;">
                                    @csrf
                                    <i style="font-size:20px;margin-left:20px;color:green;" class="fas fa-check"></i>
                                </button>
                            </form>
                        </td>

                    </tr>

                </tbody>

            @endforeach

        @endif


    </table>







</div>

@include('templates/footer')

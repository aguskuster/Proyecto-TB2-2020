@include('templates/header')



<div class="container">
    <br><br><br>

    <h1 class="text-center">Habilitar Stock</h1>

    <br><br>

    <a href="/Stock" class="float-right"><i style="font-size:20px;margin-left:20px;color:blue;"
            class="fas fa-arrow-left" style="font-family:Roboto"> Volver Atras</i></a>
    <table class="table">
        <thead class="thead-dark">
            <tr>

                <th scope="col">Proveedor</th>
                <th scope="col">Precio</th>
                <th scope="col">Fecha</th>
                <th scope="col">Ver Compra</th>
                <th scope="col">Habilitar</th>

            </tr>
        </thead>

        @if ($habilitarStock)
            @foreach ($habilitarStock as $h)

                <tbody>
                    <tr>
                        <th scope="row"> {{ $h->proveedor }} </th>
                        <td> {{ $h->precioUnitario }} {{ $h->moneda }}</td>
                        <td> {{ $h->created_at }} </td>
                        <td>
                            <button type="submit" style="background:none;border:none;text-decoration:none;"
                                data-toggle="modal" data-target="#infoStock">
                                <i style="font-size:20px;margin-left:20px;color:green;" class="fas fa-search-plus"></i>
                            </button>
                        </td>
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

<div class="modal fade" id="infoStock" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Informacion de Compra</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                      </tr>
                    </tbody>
                  </table>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

            </div>
        </div>
    </div>
</div>

@include('templates/footer')

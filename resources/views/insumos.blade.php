@include('templates/header')


<div class="container">
    <br><br><br>

    <h1 class="text-center">Agregar Insumos</h1>

    <br><br>

    <a href="/altaInsumo" style="text-decoration:none;"> <button type="button" style="border-radius:10px 10px 0px 0px;"
            class="btn btn-success btn-lg btn-block">Agregar articulo nuevo</button></a>



    <table class="table">
        <thead class="thead-dark">
            <tr>
                
                <th scope="col">Marca</th>
                <th scope="col">Categoria</th>
                <th scope="col">Nombre</th>
                <th scope="col">Precio</th>
                <th scope="col">Moneda</th>
                <th scope="col">Modificar</th>
                <th scope="col">Eliminar</th>
                
            </tr>
        </thead>

        {{-- @if ($insumos)
        @foreach ($insumos as $i)

            <tbody>
                <tr>
                    <th scope="row"> {{ $i->marca }} </th>
                    <td> {{ $i->categoria }} </td>
                    <td> {{ $i->nombre }} </td>
                    <td> {{ $i->precio }} </td>
                    <td> USD </td>
                    <td><a href="#"><i style="font-size:20px;margin-left:20px;"class="fas fa-edit"></i></a></td>
                    <td><a href="#"><i style="font-size:20px;margin-left:20px;color:red;"class="fas fa-user-times"></i></a></td>
                </tr>

            </tbody>

        @endforeach
        
        @endif --}}


    </table>







</div>

@include('templates/footer')

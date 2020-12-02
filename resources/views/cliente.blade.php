@include('templates/header')


<div class="container">
    <br><br><br>

    <h1 class="text-center">Interfaz Cliente</h1>

    <br><br>

    <a
    href="/altaCliente" style="text-decoration:none;"> <button type="button" style="border-radius:10px 10px 0px 0px;" class="btn btn-success btn-lg btn-block">Agregar Cliente</button></a>



    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">RUT</th>
                <th scope="col">Empresa</th>
                <th scope="col">Telefono</th>
                <th scope="col">Email</th>
                <th scope="col">Papelera</th>
            </tr>
        </thead>

        @isset($clientes)
        @foreach ($clientes as $c)
            
        @endforeach
        <tbody>
            <tr>
            <th scope="row"> {{ $c -> id}} </th>
                <td> {{ $c -> rut}} </td>
                <td> {{ $c -> empresa}} </td>
                <td> {{ $c -> telefono}} </td>
                <td> {{ $c -> email}} </td>
                <td><a href="#">Eliminar {{ $c -> id}} </a></td>
            </tr>

        </tbody>

        @endisset
    </table>







</div>

@include('templates/footer')

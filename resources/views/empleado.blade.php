@include('templates/header')


<div class="container">
    <br><br><br>

    <h1 class="text-center">Interfaz Empleados</h1>

    <br><br>

    <a href="/altaEmpleado" style="text-decoration:none;"> <button type="button" style="border-radius:10px 10px 0px 0px;"
            class="btn btn-success btn-lg btn-block">Agregar Empleado</button></a>



    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Cedula</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Edad</th>
                <th scope="col">Telefono</th>
                <th scope="col">Email</th>
                <th scope="col">Modificar</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
        
        @if ($empleados)
        @foreach ($empleados as $e)

            <tbody>
                <tr>
                    <th scope="row"> {{ $e->ci }} </th>
                    <td> {{ $e->nombre }} </td>
                    <td> {{ $e->apellido }} </td>
                    <td> {{ $e->edad }} </td>
                    <td> {{ $e->telefono }} </td>
                    <td> {{ $e->email }} </td>
                    <td><a href="#">Modificar {{ $e->id }} </a></td>
                    <td><a href="#">Eliminar {{ $e->id }} </a></td>
                </tr>

            </tbody>

        @endforeach
        
        @endif

    </table>







</div>

@include('templates/footer')
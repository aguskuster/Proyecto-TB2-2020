@include('templates/header')


<div class="container">
    <br><br><br>

    <h1 class="text-center">Interfaz Empleados</h1>

    <br><br>

    <a href="/altaCliente" style="text-decoration:none;"> <button type="button" style="border-radius:10px 10px 0px 0px;"
            class="btn btn-success btn-lg btn-block">Agregar Empleado</button></a>



    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Edad</th>
                <th scope="col">Telefono</th>
                <th scope="col">Email</th>
                <th scope="col">Papelera</th>
            </tr>
        </thead>

       


@include('templates/footer')
@include('templates/header')





<div class="container">

    @isset($EmpleadoSeleccionadoEliminar)

    
   
    <br><br>
    <h3 class="text-center">Eliminar Empleado</h3>

    <form action="/bajaEmpleado" method="post" class="needs-validation">

        @csrf

        <div class="form-group">
            <label for="inputID">ID</label>
            <input id="inputID" type="text" class="form-control" name="id" value="{{ $EmpleadoSeleccionadoEliminar -> id }} " readonly>
        </div>

        <div class="form-group">
            <label for="inputci">CI</label>
            <input type="text" class="form-control" name="ci" id="inputci" value="{{ $EmpleadoSeleccionadoEliminar -> ci }}"  readonly>
        </div>

        <div class="form-group">
            <label for="inputEmpresaNombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="inputNombre"
            value="{{ $EmpleadoSeleccionadoEliminar -> nombre }}"  readonly>
        </div>

        <div class="form-group">
            <label for="inputApellido">Apellido</label>
            <input type="text" class="form-control" name="apellido" id="inputApellido"
            value="{{ $EmpleadoSeleccionadoEliminar -> apellido }}"  readonly>
        </div>  

        <div class="form-group">
            <label for="inputEdad">Edad</label>
            <input type="text" class="form-control" name="edad" id="inputEdad"
            value="{{ $EmpleadoSeleccionadoEliminar -> edad }}"  readonly>
        </div>

        <div class="form-group">
            <label for="inputTelefono">Telefono</label>
            <input type="text" class="form-control" name="telefono" id="inputTelefono"
            value="{{ $EmpleadoSeleccionadoEliminar -> telefono }}"  readonly>
        </div>

        <div class="form-group">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" name="email" id="inputEmail" value="{{ $EmpleadoSeleccionadoEliminar -> email }}"  readonly>
        </div>


        <button type="submit" class="btn btn-danger">Eliminar Empleado</button>
    </form>
    @endisset
</div>

@include('templates/footer')

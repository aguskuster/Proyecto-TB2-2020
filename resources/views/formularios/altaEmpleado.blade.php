@include('templates/header')


<div class="container">

    @isset($empleadoCreado)

    <script>alert("Empleado Creado")</script>
    
    @endisset
    <br><br>
    <h3 class="text-center">Agregar Empleado</h3>

    <form action="/altaEmpleado" method="post" class="needs-validation">

        @csrf
        <div class="form-group">
            <label for="inputRUT">Cedula</label>
            <input type="text" class="form-control" name="ci" id="inputCedula" placeholder="Ingrese Cedula" required>
        </div>
        <div class="form-group">
            <label for="inputRUT">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="inputNombre" placeholder="Ingrese Nombre" required>
        </div>

        <div class="form-group">
            <label for="inputRUT">Apellido</label>
            <input type="text" class="form-control" name="apellido" id="inputApellido" placeholder="Ingrese Apellido" required>
        </div>

        <div class="form-group">
            <label for="inputEmpresaNombre">Edad</label>
            <input type="text" class="form-control" name="edad" id="inputEdad"
                placeholder="Ingrese Edad" required>
        </div>

        <div class="form-group">
            <label for="inputTelefono">Telefono</label>
            <input type="text" class="form-control" name="telefono" id="inputTelefono"
                placeholder="Ingrese numero de telefono" required>
        </div>

        <div class="form-group">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Ingrese Email" required>
        </div>


        <button type="submit" class="btn btn-info">Agregar</button>
    </form>

</div>

@include('templates/footer')

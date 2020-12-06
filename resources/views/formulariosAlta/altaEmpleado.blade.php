@include('templates/header')


<div class="container">

    @isset($empleadoCreado)

    <script>alert("Empleado Creado")</script>
    
    @endisset
    <br><br>
    <h3 class="text-center">Agregar Empleado</h3>

    <form action="/altaEmpleado" method="post" class="needs-validation">
        @csrf
       
        @error('ci')
        <div class="alert alert-danger">
            Cedula Incorrecta
        </div>
        @enderror
        <div class="form-group">
            <label for="inputRUT">Cedula</label>
            <input type="number" class="form-control" name="ci" id="inputCedula" placeholder="Ingrese Cedula" value={{old ('ci')}} >
        </div>
        @error('nombre')
       
        <div class="alert alert-danger">
            Nombre Obligatorio
        </div>

        @enderror
        
        <div class="form-group">
            <label for="inputRUT">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="inputNombre" placeholder="Ingrese Nombre" value={{old ('nombre')}}>
        </div>
        @error('apellido')
       
        <div class="alert alert-danger">
            Apellido Obligatorio
        </div>

        @enderror
        <div class="form-group">
            <label for="inputRUT">Apellido</label>
            <input type="text" class="form-control" name="apellido" id="inputApellido" placeholder="Ingrese Apellido"  value={{old ('apellido')}}>
        </div>
        @error('edad')
       
        <div class="alert alert-danger">
            Edad Obligatorio
        </div>

        @enderror

        <div class="form-group">
            <label for="inputEmpresaNombre">Edad</label>
            <input type="number" class="form-control" name="edad" id="inputEdad"
                placeholder="Ingrese Edad" value={{old ('edad')}}>
        </div>
        @error('telefono')
       
        <div class="alert alert-danger">
            Telefono Obligatorio
        </div>

        @enderror
        <div class="form-group">
            <label for="inputTelefono">Telefono</label>
            <input type="number" class="form-control" name="telefono" id="inputTelefono"
                placeholder="Ingrese numero de telefono" value={{old ('telefono')}}>
        </div>
        @error('email')
       
        <div class="alert alert-danger">
            Email Obligatorio
        </div>

        @enderror
        <div class="form-group">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Ingrese Email" value={{old ('email')}}>
        </div>


        <button type="submit" class="btn btn-info">Agregar</button>
    </form>

</div>

@include('templates/footer')

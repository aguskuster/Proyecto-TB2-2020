@include('templates/header')





<div class="container">

    @isset($empleadoSeleccionado)

    
    
   
    <br><br>
    <h3 class="text-center">Modificar Empleado</h3>

    <form action="/modificarEmpleado" method="post" class="needs-validation">

        @csrf

        <div class="form-group">
            
            <input id="inputID" type="text" class="form-control" name="id" value="{{ $empleadoSeleccionado -> id }} " hidden>
        </div>
       
        <div class="form-group">
            <label for="inputci">CI</label>
            <input type="text" class="form-control" name="ci" id="inputci" value="{{ $empleadoSeleccionado -> ci }}" readonly>
        </div>
        @error('nombre')
        <div class="alert alert-danger">
            Nombre invalido
        </div>
        @enderror
        <div class="form-group">
            <label for="inputEmpresaNombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="inputNombre" onkeypress="return isNumericKey(event)"
            value="{{ $empleadoSeleccionado -> nombre }}" required>
        </div>
        @error('apellido')
        <div class="alert alert-danger">
            Apellido invalido
        </div>
        @enderror
        <div class="form-group">
            <label for="inputApellido">Apellido</label>
            <input type="text" class="form-control" name="apellido" id="inputApellido" onkeypress="return isNumericKey(event)"
            value="{{ $empleadoSeleccionado -> apellido }}" required>
        </div>  
        @error('edad')
        <div class="alert alert-danger">
            Edad invalido
        </div>
        @enderror
        <div class="form-group">
            <label for="inputEdad">Edad</label>
            <input type="text" class="form-control" name="edad" id="inputEdad" min="16" max="100"
            value="{{ $empleadoSeleccionado -> edad }}" required>
        </div>
        @error('telefono')
        <div class="alert alert-danger">
            Telefono invalido
        </div>
        @enderror
        <div class="form-group">
            <label for="inputTelefono">Telefono</label>
            <input type="text" class="form-control" name="telefono" id="inputTelefono"
            value="{{ $empleadoSeleccionado -> telefono }}" required>
        </div>
        @error('email')
        <div class="alert alert-danger">
            Email invalido
        </div>
        @enderror
        <div class="form-group">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" name="email" id="inputEmail" value="{{ $empleadoSeleccionado -> email }}" required>
        </div>


        <button type="submit" class="btn btn-info">Modificar Empleado</button>
    </form>
    @endisset
</div>

@include('templates/footer')

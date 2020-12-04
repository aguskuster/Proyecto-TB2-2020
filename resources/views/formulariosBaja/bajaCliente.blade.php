@include('templates/header')





<div class="container">

    @isset($clienteSeleccionadoEliminar)

    
    
   
    <br><br>
    <h3 class="text-center">Eliminar Cliente</h3>

    <form action="/bajaCliente" method="post" class="needs-validation">

        @csrf

        <div class="form-group">
            <label for="inputID">ID</label>
            <input id="inputID" type="text" class="form-control" name="id" value="{{ $clienteSeleccionadoEliminar -> id }} " readonly>
        </div>

        <div class="form-group">
            <label for="inputRUT">RUT</label>
            <input type="text" class="form-control" name="rut" id="inputRUT" value="{{ $clienteSeleccionadoEliminar -> rut }}" required readonly>
        </div>

        <div class="form-group">
            <label for="inputEmpresaNombre">Empresa</label>
            <input type="text" class="form-control" name="empresa" id="inputEmpresaNombre"
            value="{{ $clienteSeleccionadoEliminar -> empresa }}" required readonly>
        </div>

        <div class="form-group">
            <label for="inputTelefono">Telefono</label>
            <input type="text" class="form-control" name="telefono" id="inputTelefono"
            value="{{ $clienteSeleccionadoEliminar -> telefono }}" required readonly>
        </div>

        <div class="form-group">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" name="email" id="inputEmail" value="{{ $clienteSeleccionadoEliminar -> email }}" required readonly>
        </div>


        <button type="submit" class="btn btn-danger">Eliminar Cliente</button>
    </form>
    @endisset
</div>

@include('templates/footer')

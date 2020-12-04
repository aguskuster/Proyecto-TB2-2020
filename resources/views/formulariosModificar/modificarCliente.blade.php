@include('templates/header')





<div class="container">

    @isset($clienteSeleccionado)

    
    
   
    <br><br>
    <h3 class="text-center">Modificar cliente</h3>

    <form action="/modificarCliente" method="post" class="needs-validation">

        @csrf

        <div class="form-group">
            <label for="inputID">ID</label>
            <input id="inputID" type="text" class="form-control" name="id" value="{{ $clienteSeleccionado -> id }} " readonly>
        </div>

        <div class="form-group">
            <label for="inputRUT">RUT</label>
            <input type="text" class="form-control" name="rut" id="inputRUT" value="{{ $clienteSeleccionado -> rut }}" required>
        </div>

        <div class="form-group">
            <label for="inputEmpresaNombre">Empresa</label>
            <input type="text" class="form-control" name="empresa" id="inputEmpresaNombre"
            value="{{ $clienteSeleccionado -> empresa }}" required>
        </div>

        <div class="form-group">
            <label for="inputTelefono">Telefono</label>
            <input type="text" class="form-control" name="telefono" id="inputTelefono"
            value="{{ $clienteSeleccionado -> telefono }}" required>
        </div>

        <div class="form-group">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" name="email" id="inputEmail" value="{{ $clienteSeleccionado -> email }}" required>
        </div>


        <button type="submit" class="btn btn-info">Modificar Cliente</button>
    </form>
    @endisset
</div>

@include('templates/footer')

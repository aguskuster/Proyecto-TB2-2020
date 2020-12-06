@include('templates/header')





<div class="container">

    @isset($clienteSeleccionado)

    
    
   
    <br><br>
    <h3 class="text-center">Modificar Cliente</h3>

    <form action="/modificarCliente" method="post" class="needs-validation">

        @csrf

        <div class="form-group">
            
            <input id="inputID" type="text" class="form-control" name="id" value="{{ $clienteSeleccionado -> id }} " hidden>
        </div>
      

        <div class="form-group">
            <label for="inputRUT">RUT</label>
            <input type="number" class="form-control" readonly name="rut" id="inputRUT" value="{{ $clienteSeleccionado -> rut }}" >
        </div>
        @error('empresa')
       
        <div class="alert alert-danger">
            Empresa invalida
        </div>

        @enderror
        <div class="form-group">
            <label for="inputEmpresaNombre">Empresa</label>
            <input type="text" class="form-control" name="empresa" id="inputEmpresaNombre"
            value="{{ $clienteSeleccionado -> empresa }}" onkeypress="return isNumericKey(event)">
        </div>
        @error('telefono')
       
        <div class="alert alert-danger">
            Telefono invalido
        </div>

        @enderror
        <div class="form-group">
            <label for="inputTelefono">Telefono</label>
            <input type="number" class="form-control" name="telefono" id="inputTelefono"
            value="{{ $clienteSeleccionado -> telefono }}" >
        </div>
        @error('email')
       
        <div class="alert alert-danger">
            Email invalido
        </div>

        @enderror
        <div class="form-group">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" name="email" id="inputEmail" value="{{ $clienteSeleccionado -> email }}" >
        </div>


        <button type="submit" class="btn btn-info">Modificar Cliente</button>
    </form>
    @endisset
</div>

@include('templates/footer')

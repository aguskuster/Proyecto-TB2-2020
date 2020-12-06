@include('templates/header')


<div class="container">

    @isset($clienteCreado)

    <script>alert("Cliente Creado")</script>
    
    @endisset
    
    <br><br>
    <h3 class="text-center">Agregar cliente</h3>

    <form action="/altaCliente" method="post" class="needs-validation">

        @csrf
        @error('rut')
       
        <div class="alert alert-danger">
            RUT invalido
        </div>

        @enderror
        <div class="form-group">
            <label for="inputRUT">RUT</label>
            <input type="number" class="form-control" name="rut" id="inputRUT" placeholder="Ingrese RUT" value={{old ('rut')}}>
        </div>
        @error('empresa')
       
        <div class="alert alert-danger">
            Empresa invalida
        </div>

        @enderror
        <div class="form-group">
            <label for="inputEmpresaNombre">Empresa</label>
            <input type="text" class="form-control" name="empresa" id="inputEmpresaNombre" 
                placeholder="Ingrese nombre de la empresa" onkeypress="return isNumericKey(event)" value={{old ('empresa')}}>
        </div>
        @error('telefono')
       
        <div class="alert alert-danger">
            Telefono invalido
        </div>

        @enderror
        <div class="form-group">
            <label for="inputTelefono">Telefono</label>
            <input type="number" class="form-control" name="telefono" id="inputTelefono" 
            placeholder="Ingrese numero de telefono" value={{old ('telefono')}} >
        </div>
        @error('email')
       
        <div class="alert alert-danger">
            Email invalido
        </div>

        @enderror
        <div class="form-group">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email" value={{old ('email')}}>
        </div>


        <button type="submit" class="btn btn-info">Agregar</button>
    </form>

</div>

@include('templates/footer')

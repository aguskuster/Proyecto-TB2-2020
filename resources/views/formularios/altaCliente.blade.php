@include('templates/header')


<div class="container">
    <br><br>
    <h3 class="text-center">Agregar cliente</h3>

    <form action="/altaCliente" method="post" class="needs-validation">

        @csrf

        <div class="form-group">
            <label for="inputRUT">RUT</label>
            <input type="text" class="form-control" name="rut" id="inputRUT" placeholder="Ingrese RUT" required>
        </div>

        <div class="form-group">
            <label for="inputEmpresaNombre">Empresa</label>
            <input type="text" class="form-control" name="empresa" id="inputEmpresaNombre" placeholder="Ingrese nombre de la empresa" required>
        </div>

        <div class="form-group">
            <label for="inputTelefono">Telefono</label>
            <input type="text" class="form-control" name="telefono" id="inputTelefono" placeholder="Ingrese numero de telefono" required>
        </div>

        <div class="form-group">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email" required>
        </div>
    

        <button type="submit" class="btn btn-info">Agregar</button>
    </form>

</div>

@include('templates/footer')
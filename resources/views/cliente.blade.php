@include('templates/header')


<div class="container">
    <br><br><br>

    <h1 class="text-center">Interfaz Cliente</h1>

    <br><br>

    <button type="button" class="btn btn-success btn-lg btn-block">Agregar Cliente</button>

    

    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">RUT</th>
            <th scope="col">Empresa</th>
            <th scope="col">Telefono</th>
            <th scope="col">Email</th>
            <th scope="col">Papelera</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td><a href="#">Eliminar</a></td>
          </tr>
        
        </tbody>
      </table>
      
      
      
          
      


</div>

@include('templates/footer')
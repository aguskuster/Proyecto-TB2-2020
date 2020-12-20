<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Reporte de Compra</title>
</head>

<body>
    <div class="container-fluid border">
        <hr>
        <h3 class="d-inline">Insumos Inf.</h3>

        <h4 class="d-inline float-right" >FACTURA NRO#001</h4>

        <hr>
        <br><br>
        <div class="container border p-1 border-dark mb-5">
             <center><h5>Datos de empleado</h5></center>
             <hr>
            <label class="d-inline" for="nombreEmpleado">Empleado :</label> <p class="d-inline"> {{ auth()->user()->nombre }}  {{ auth()->user()->apellido }}  </p> <br> 
            <label class="d-inline" for="nombreEmpleado">Forma de Pago :</label> <p class="d-inline">Tarjeta</p> <br>
        
        </div>
        <br><br>
        
            <table class="table border">
                <thead>
                  <tr>
                    <th scope="col">Proveedor</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Producto</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Empleado</th>
                    <th scope="col">Fecha</th>

                  </tr>
                </thead>
                <tbody>
                @foreach ($compras as $c)
                  <tr>
                    <th scope="row"> {{ $c->proveedor }} </th>
                    <td> {{ $c->categoria }} </td>
                    <td> {{ $c->nombreProducto }} </td>
                    <td> {{ $c->precioUnitario }} {{ $c->moneda }}  </td>
                    <td> {{ $c->cantidad }} </td>
                    <td> {{ $c->empleado }} </td>
                    <td> {{ $c->created_at }} </td>
                  </tr>
                 @endforeach
                  
                </tbody>
              </table>
              
  

        <hr>

    </div>










    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>

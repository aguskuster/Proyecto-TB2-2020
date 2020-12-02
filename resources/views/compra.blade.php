@include('templates/header')

<div class="container">
    <br><br>
    <h3 class="text-center">Agregar persona</h3>

    <form action="/altaPersona" method="post">
        @csrf
        <div class="form-group">
            <label for="inputNombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="inputNombre" placeholder="Nombre">
        </div>
        <div class="form-group">
            <label for="inputApellido">Apellido</label>
            <input type="text" class="form-control" name="apellido" id="inputApellido" placeholder="Apellido">
        </div>
        <div class="form-group">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email">
        </div>

        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>

</div>


<div class="container">
    <br><br>
    <br><br>
    <h3 class="text-center">Listar Personas</h3>
    
    @isset($personas)

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                   
                @foreach ($personas as $p)

                    <tr>
                        <th scope="row">{{ $p->id }}</th>
                        <td>{{ $p->nombre }}</td>
                        <td>{{ $p->apellido }}</td>
                        <td>{{ $p->mail }}</td>
                    </tr>

                @endforeach


            </tbody>
        </table>

    @endisset


</div>





@include('templates/footer')
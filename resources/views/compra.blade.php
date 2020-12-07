@include('templates/header')


<div class="container-fluid">

    <br><br>
    <h3 class="text-center">Compra de Productos</h3>
    <br><br><br>
    
    <div class="container float-left"
        style="margin-left:5%;width:40%;background:whitesmoke;padding:10px;border-radius:10px;">

       


        {{-- <form method="post" action="/agregarCarrito" id="agregarCarrito">
            --}}

            <div class="form-group" style="margin:auto">
                
                <form action="/filtrar" method="post" class="needs-validation" id="filtrar">

                    @csrf
                    <label for="selectProveedor">Proveedor y Categoria</label>
                    <br>

                    <select name="selectProveedor" class="form-control inline-block float-left"
                        style="width:30%;margin-right:10px;">

                        @isset($prodFiltrado)

                            @foreach ($prodFiltrado as $marcaAnterior)
                                <option value="{{ $marcaAnterior->marca }}">{{ $marcaAnterior->marca }}</option>
                            @endforeach

                        @endisset
                        @foreach ($datos[0] as $p)



                            <option value="{{ $p->marca }}">{{ $p->marca }}</option>

                        @endforeach



                    </select>

                    <select name="selectCategoria" class="form-control inline-block float-left"
                        style="width:30%;margin-right:10px;">


                        @foreach ($datos[0] as $p)

                            <option value="{{ $p->id }}">{{ $p->categoria }}</option>

                        @endforeach



                    </select>


                    <input type="submit" class="btn btn-info float-left inline-block" value="Filtrar">

                </form>


                <br><br>
                <label for="selectProveedor">Producto</label>


                <select name="selectProveedor" id="selectProveedor" class="form-control inline-block"
                    style="width:50%;margin-right:10px;">
                    @isset($prodFiltrado)
                        @foreach ($prodFiltrado as $prod)

                            <option value="{{ $prod->nombre }}">
                                {{ $prod->nombre }} : {{ $prod->precio }} USD
                            </option>

                        @endforeach

                    @endisset
                </select>


                <br>
                <label for="cantidad">Cantidad</label>
                <input type="text" id="cantidad" name="cantidad" class="form-control" style="width:50%">

            </div>
            <br>
            <div class="form-group">
                <label for="selectVendedor">Vendedor</label>
                <select name="selectVendedor" id="selectVendedor" class="form-control" style="width:50%">

                    @foreach ($datos[1] as $e)

                        <option value="{{ $e->nombre }} {{ $e->apellido }}">{{ $e->nombre }} {{ $e->apellido }}</option>

                    @endforeach

                </select>

            </div>

            <input type="submit" class="btn btn-success float-right" value="Agregar al Carrito">


            {{--
        </form> --}}




    </div>

    <div class="container float-right"
        style="margin-right:5%;width:48%;background:#1d1d1f;padding:10px;border-radius:10px;">


        <form action="/altaCompra" method="post" class="needs-validation">

            @csrf
            <table class="table" style="border-radius:10px;">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Proveedor</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Nombre Producto</th>

                        <th scope="col">Precio Unitario</th>
                        <th scope="col">Moneda</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Borrar</th>

                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>6</td>
                        <td>7</td>
                        <td>8</td>

                    </tr>

                </tbody>


            </table>
            <button type="submit" class="btn btn-success float-right">Comprar</button>
            <a href="historialDeCompra" class="float-left">Ver el historial de compra</a>
        </form>

        <a href="/altaInsumo" style="text-decoration:none;"> <button type="button" style="border-radius:10px 10px 0px 0px;"
            class="btn btn-success " style="width:100%">Agregar Insumo</button></a>
    </div>
   
 
</div>


@include('templates/footer')

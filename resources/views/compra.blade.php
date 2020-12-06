@include('templates/header')

<div class="container-fluid">
    
    
    <br><br>
    <h3 class="text-center">Compra de Insumos</h3>
    <br><br><br>

    <a href="/Insumos"><button class="btn btn-info btn-lg btn-block">Agregar artículo nuevo</button></a>


    


    <div class="container float-left" style="background:whitesmoke;padding:10px;border-radius:10px;width:40%;">

        <form action="/altaCompra" method="post" class="needs-validation">

            @csrf

            <div class="form-group">
                <label for="selectProveedor">Proveedor</label>
                <select name="selectProveedor" id="selectProveedor" class="form-control">

                    @foreach ($datos[0] as $p)

                        <option value="{{ $p->marca }}">{{ $p->marca }}</option>

                    @endforeach

                </select>

            </div>

            <div class="form-group">
                <label for="selectCategoria">Categoria</label>
                <select name="selectCategoria" id="selectCategoria" class="form-control">

                    @foreach ($datos[0] as $p)

                        <option value="{{ $p->categoria }}">{{ $p->categoria }}</option>

                    @endforeach

                </select>

            </div>

            <div class="form-group">
                <label for="selectProductoNombre">Nombre Producto</label>
                <select name="selectProductoNombre" id="selectProductoNombre" class="form-control">

                    @foreach ($datos[0] as $p)

                        <option value="{{ $p->nombre }}"> {{ $p->nombre }} </option>

                    @endforeach

                </select>

            </div>

            <div class="form-group">
                <label for="selectPrecioUnitario">Precio Unitario</label>
                <select name="selectPrecioUnitario" id="selectPrecioUnitario" class="form-control">

                    @foreach ($datos[0] as $p)

                        <option value="{{ $p->precio }}"> {{ $p->precio }} </option>

                    @endforeach

                </select>

            </div>

            <div class="form-group">
                <label for="selectMoneda">Moneda</label>
                <select name="selectMoneda" id="selectMoneda" class="form-control">

                    @foreach ($datos[0] as $p)

                        <option value="{{ $p->moneda }}"> {{ $p->moneda }} </option>

                    @endforeach

                </select>

            </div>

            <div class="form-group">
                <label for="inputCantidad">Cantidad</label>
                <input type="text" class="form-control" name="inputCantidad" id="inputCantidad" value="1"
                    required>
            </div>



            <div class="form-group">
                <label for="selectVendedor">Vendedor</label>
                <select name="selectVendedor" id="selectVendedor" class="form-control">

                    @foreach ($datos[1] as $e)

                        <option value="{{ $e->nombre }} {{ $e->apellido }}">{{ $e->nombre }} {{ $e->apellido }}</option>

                    @endforeach

                </select>

            </div>


            <button type="submit" class="btn btn-info">Agregar</button>
        </form>

    </div>





    <div class="container float-right" style="background:whitesmoke;padding:10px;border-radius:10px;width:40%;">

        <form action="/altaCompra" method="post" class="needs-validation">

            @csrf

            <div class="form-group">
                <label for="selectProveedor">Proveedor</label>
                <select name="selectProveedor" id="selectProveedor" class="form-control">

                    @foreach ($datos[0] as $p)

                        <option value="{{ $p->marca }}">{{ $p->marca }}</option>

                    @endforeach

                </select>

            </div>

            <div class="form-group">
                <label for="selectCategoria">Categoria</label>
                <select name="selectCategoria" id="selectCategoria" class="form-control">

                    @foreach ($datos[0] as $p)

                        <option value="{{ $p->categoria }}">{{ $p->categoria }}</option>

                    @endforeach

                </select>

            </div>

            <div class="form-group">
                <label for="selectProductoNombre">Nombre Producto</label>
                <select name="selectProductoNombre" id="selectProductoNombre" class="form-control">

                    @foreach ($datos[0] as $p)

                        <option value="{{ $p->nombre }}"> {{ $p->nombre }} </option>

                    @endforeach

                </select>

            </div>

            <div class="form-group">
                <label for="selectPrecioUnitario">Precio Unitario</label>
                <select name="selectPrecioUnitario" id="selectPrecioUnitario" class="form-control">

                    @foreach ($datos[0] as $p)

                        <option value="{{ $p->precio }}"> {{ $p->precio }} </option>

                    @endforeach

                </select>

            </div>

            <div class="form-group">
                <label for="selectMoneda">Moneda</label>
                <select name="selectMoneda" id="selectMoneda" class="form-control">

                    @foreach ($datos[0] as $p)

                        <option value="{{ $p->moneda }}"> {{ $p->moneda }} </option>

                    @endforeach

                </select>

            </div>

            <div class="form-group">
                <label for="inputCantidad">Cantidad</label>
                <input type="text" class="form-control" name="inputCantidad" id="inputCantidad" value="1"
                    required>
            </div>



            <div class="form-group">
                <label for="selectVendedor">Vendedor</label>
                <select name="selectVendedor" id="selectVendedor" class="form-control">

                    @foreach ($datos[1] as $e)

                        <option value="{{ $e->nombre }} {{ $e->apellido }}">{{ $e->nombre }} {{ $e->apellido }}</option>

                    @endforeach

                </select>

            </div>


            <button type="submit" class="btn btn-info">Agregar</button>
        </form>

    </div>







    <br> 

    <a href="historialDeCompra" class="float-right">Ver el historial de compra</a>
</div>
</div>

@include('templates/footer')
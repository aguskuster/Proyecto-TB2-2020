@include('templates/header')

<div class="container">

    @isset($compraCreada)

        <script>
            alert("Cliente Creado")

        </script>

    @endisset

    <br><br>
    <h3 class="text-center">Ventas de Insumos</h3>
    <br><br><br>

    <div class="container" style="background:whitesmoke;padding:10px;">

        <form action="/altaVenta" method="post" class="needs-validation">

            @csrf
    
            <div class="form-group">
                <label for="selectVendedor">Vendedor</label>
                <select name="vendedor" id="selectVendedor">
                   
                    <option value="agustin">Agustin</option>
                    
                </select>
            </div>
    
            
    
            <button type="submit" class="btn btn-info">Agregar</button>
        </form>

    </div>
</div>


@include('templates/footer')

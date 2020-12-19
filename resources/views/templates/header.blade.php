<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">

    <title>Insumos Inf.</title>


    <style>
        
        * {
            font-family: 'Roboto';
        }

        input[type=number]::-webkit-outer-spin-button,

        input[type=number]::-webkit-inner-spin-button {

            -webkit-appearance: none;

            margin: 0;

        }



        input[type=number] {

            -moz-appearance: textfield;

        }
        em{
            color:red;
        }

    </style>
</head>

<body onkeydown="javascript:Disable_Control_C()">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/">Insumos Inf.</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" href="/Empleado">Empleados</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Cliente">Clientes</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/Stock">Stock</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Compra">Compras</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Venta">Ventas</a>
                </li>


            </ul>
        </div>
      
        <p class="my-2 my-sm-0 mr-3" style="color:white">Bienvenido {{ auth()->user()->nombre }}</p>
        
    </nav>

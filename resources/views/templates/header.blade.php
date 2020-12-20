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
        body{
            height: 100vh;
            width: 100vw;
            background-attachment: fixed;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-repeat: no-repeat;
            background-image: url(https://images.unsplash.com/photo-1587304791091-c9fbb7cbfda0?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1267&q=80);
        }
        table{
            background-color: white;
        }
    </style>
    
</head>

<body onkeydown="javascript:Disable_Control_C()">

    <nav class="navbar navbar-expand-lg" style=" background-color: #26292b;">
        <a class="navbar-brand" href="/" style=" color: #ffffff;">Insumos Inf.</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" href="/Empleado" style=" color: #ffffff;">Empleados</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Cliente" style=" color: #ffffff;">Clientes</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/Stock" style=" color: #ffffff;">Stock</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Compra" style=" color: #ffffff;">Compras</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Venta" style=" color: #ffffff;">Ventas</a>
                </li>


            </ul>
        </div>
        @isset(auth()->user()->nombre)
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" style="color: #ffffff;background-color: #474b4f;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Bienvenido {{ auth()->user()->nombre }}
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="/logout" style="color:red;">Logout</a>
    
            </div>
          </div>
        @endisset   
    </nav>

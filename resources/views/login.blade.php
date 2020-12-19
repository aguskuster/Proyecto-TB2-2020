<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Login</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="canonical" href="index.html">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/sign-in/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <header>

      <form class="form-signin" method="post" action="/login">
        @csrf

        <div class="contendor">
          <label for="inputEmail">Correo Electronico</label>
    
          <input type="email" id="inputEmail" name="email" class="imputss" placeholder="Ingrese correo" required autofocus>
    
          <label for="inputPassword">Contraseña</label>
    
          <input type="password" name="password" id="inputPassword" class="imputss" placeholder="Ingrese Contraseña" required>
          <div>

          <button  class="boton" type="submit">Iniciar Sesion</button>
         
          @isset($error)
          <div class="error">
            Fallo la autenticacion
          </div>
          @endisset
        </div>
      
   




    </form>
    </header>

   



  </body>
</html>
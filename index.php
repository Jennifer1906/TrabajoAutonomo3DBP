<!--
  Estudiante: Jennifer Elizabeth Quizhpe
  Ciclo: Quinto "A"
-->

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="media/login.png">
    <link rel="stylesheet" type="text/css" href="estiloLogin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container-form sign-up">
        <div class="welcome-back">
            <div class="message">
                <h2 style="font-size: 65px;">BIENVENIDO</h2>
                <p style="font-size: 18px;">Si ya tienes una cuenta por favor inicia sesion aquí</p>
                <button class="sign-up-btn">Iniciar Sesión</button>
            </div>
        </div>
        <form class="formulario" method="POST" action="registrar.php">
            <h2 class="create-account">Crear una cuenta</h2>
            <div class="iconos">
                <div class="border-icon">
                    <img src="media/login.png" alt="esto es una imagen de login">
                </div>

            </div>
            <input name="name" type="text" placeholder="Nombres">
            <input name="apellidos" type="text" placeholder="Apellidos">
            <input name="email" type="email" placeholder="Email">
            <input name="password" type="password" placeholder="Contraseña">
            <input type="submit" value="Registrarse">
        </form>
    </div>
    <div class="container-form sign-in">
        <form class="formulario" method="POST" action="login.php ">
            <h2 class="create-account">Iniciar Sesion</h2>
            <div class="iconos">
                <div class="border-icon">
                    <img src="media/login.png" alt="esto es una imagen de login">
                </div>

            </div>
            <p class="cuenta-gratis">¿Aun no tienes una cuenta?</p>
            <input name="email" type="email" placeholder="Email">
            <input name="password"  type="password" placeholder="Contraseña">
            <input type="submit" value="Iniciar Sesion">
        </form>
        <div class="welcome-back">
            <div class="message">
                <h2 style="font-size: 65px;">Bienvenido de nuevo</h2>
                <p style="font-size: 18px;">Si aun no tienes una cuenta por favor registrese aquí</p>
                <button class="sign-in-btn">Registrarse</button>
            </div>
        </div>
    </div>
    <script src="login.js"></script>
</body>

</html>
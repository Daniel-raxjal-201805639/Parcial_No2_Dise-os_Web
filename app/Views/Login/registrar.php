<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS-->
    <link rel="stylesheet" href="<?= base_url('css/estilos.css')?>">

    <title>Registrar</title>
</head>
<body>

    <form class="login-from" action="" method="get">
        <h1>Registrarse</h1>
        <div class="input-group span-2">
            <label for="email" class="input-label">Usuario</label>
            <input type="email" class="input-text" id="email" placeholder="Ingrese su Uusario">
        </div>
        <div class="input-group span-2">
            <label for="password" class="input-label">Contraseña</label>
            <input type="password" class="input-text" id="password" name="password" placeholder="Ingrese su Contraseña">
        </div>
        <div class="input-group span-2">
            <label for="password" class="input-label">Verifique Contraseña</label>
            <input type="password" class="input-text" id="password" name="password" placeholder="Ingrese su Contraseña">
        </div>
        <div class="input-group span-2">
            <button class="input-button">Registrarse</button>
        </div>
    </form>
    
</body>
</html>
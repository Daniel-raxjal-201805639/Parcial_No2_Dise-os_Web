<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS-->
    <link rel="stylesheet" href="<?= base_url('css/estilos.css')?>">

    <title>Iniciar sesión</title>
</head>
<body>
    
    

    <form class="login-from" action="<?=base_url('listar_usuarios') ?>" method="get">
       
       <h1>Iniciar sesión</h1>
        <div class="input-group span-2">
            <label for="txtusuario" class="input-label">Usuario</label>
            <input type="text" name="txtusuario" class="input-text" placeholder="Ingrese su Usario" >
        </div>
        <div class="input-group span-2">
            <label for="txtpass" class="input-label">Contraseña</label>
            <input type="password" name="txtpass" class="input-text"  placeholder="Ingrese su Contraseña" >
        </div>
        <div class="input-group span-2">
        <button class="input-button input-button-primary">Iniciar sesión</button>
        </div>
        
        
    </form>
         


</body>
</html>
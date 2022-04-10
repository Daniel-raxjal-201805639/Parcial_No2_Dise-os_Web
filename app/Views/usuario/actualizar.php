<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS-->
    <link rel="stylesheet" href="<?=base_url('css/estilos.css') ?>">
    <title>Actualizar</title>
</head>
<body>
<form class="login-from" action="<?=base_url('modificar_usuario')?>" method="get">
        <h1>Actualizar Datos</h1>
        <div class="input-group span-2">
        <label for="txtcodigo">Código:</label>
                <input type="text" name="txtcodigo" value="<?= $usuario['codigo_usuario']?>"  readonly>
        </div>
        <div class="input-group span-2">
        <label for="txtnombre">Nombre:</label>
                <input type="text" name="txtnombre" value="<?= $usuario['nombre']?>">
        </div>
        <div class="input-group span-2">
        <label for="txtapellido">Apellido:</label>
                <input type="text" name="txtapellido" value="<?= $usuario['apellido']?>">
        </div>
        <div class="input-group span-2">
        <label for="txttelefono">Telefono:</label>
                <input type="text" name="txttelefono" value="<?= $usuario['telefono']?>">
        </div>
        <div class="input-group span-2">
        <label for="txtfecha">Fecha:</label>
                <input type="text" name="txtfecha" value="<?= $usuario['fecha']?>">
        </div>
       
        <div class="input-group span-2">
        <input type="submit" name="btnEnviar" value="Guardar datos">
        </div>
    </form>
</body>
</html>
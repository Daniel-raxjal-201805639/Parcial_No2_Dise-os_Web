<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS-->
    <link rel="stylesheet" href="<?=base_url('css/estilos.css') ?>">

    <title>Agregar Usuario</title>
</head>
<body>
        

    <form class="login-from" action="<?=base_url('guardarusuario')?>" method="get">
        <h1>Agregar Usuario</h1>
        <div class="input-group span-2">
        <label for="txtcodigo">Código:</label>
                <input type="text" name="txtcodigo" placeholder="Ingrese Código_Usario">
        </div>
        <div class="input-group span-2">
        <label for="txtnombre">Nombre:</label>
                <input type="text" name="txtnombre" placeholder="Ingrese Nombre">
        </div>
        <div class="input-group span-2">
        <label for="txtapellido">Apellido:</label>
                <input type="text" name="txtapellido" placeholder="Ingrese Apellido">
        </div>
        <div class="input-group span-2">
        <label for="txttelefono">Telefono:</label>
                <input type="text" name="txttelefono" placeholder="Ingrese Telefono">
        </div>
        <div class="input-group span-2">
        <label for="txtfecha">Fecha:</label>
                <input type="text" name="txtfecha" placeholder="Ingrese Fecha">
        </div>
       
        <div class="input-group span-2">
        <input type="submit" name="btnEnviar" value="Guardar datos">
        </div>
    </form>
</body>
</html>
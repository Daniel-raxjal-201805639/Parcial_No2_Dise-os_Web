<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS-->
    <link rel="stylesheet" href="<?= base_url('css/estilotabla.css')?>">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Usuarios</title>
</head>
<body>

    

    <div class="container-tabla">
    <a href="<?=base_url('ver_formulario_nuevo_usuario') ?>">
        <span class="material-icons">person_add</span>
    </a>
        <div class="tabla_titulo"> Datos de Usuarios</div>
            <div class="tabla_th"> Codigo_usuario</div>
            <div class="tabla_th"> Nombres</div>
            <div class="tabla_th"> Apellidos</div>
            <div class="tabla_th">Telefono</div>
            <div class="tabla_th"> Fecha</div>
            <div class="tabla_th">Acciones</div>
            <?php

            foreach ($usuarios as $datos):
            
            ?>
                <div class="tabla_item"><?= $datos['codigo_usuario']; ?> </div>
                <div class="tabla_item"><?= $datos['nombre']; ?> </div>
                <div class="tabla_item"><?= $datos['apellido']; ?> </div>
                <div class="tabla_item"><?= $datos['telefono']; ?> </div>
                <div class="tabla_item"><?= $datos['fecha']; ?> </div>
                <div class="tabla_item">
                    <a href="<?=base_url('actualizar_usuario/'.$datos['codigo_usuario']) ?>">
                        <span class="material-icons"> edit</span>Acualizar
                    </a>
                    <a href="<?= base_url('eleminar_usuario/'.$datos['codigo_usuario'])?>">
                        <span class="material-icons">delete</span>Eliminar
                    </a>
                </div>

            <?php
                endforeach;
                
            ?>
            
    </div>
</body>
</html>
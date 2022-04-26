<?php
    require_once("config.php");
    $usuario = new Usuario();
    $usuario->loadById(2);
    echo $usuario;
?>
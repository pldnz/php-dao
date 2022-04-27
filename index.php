<?php
    require_once("config.php");
    
    // $usuario = new Usuario();
    // $usuario->loadById(2);
    // echo $usuario;
    // echo '<br>';


    //utilizando método estático
    // $lista = Usuario::getList();
    // echo json_encode($lista);


    // $search = Usuario::search("benzema");
    // echo json_encode($search);


    // $usuario = new Usuario();
    // $usuario->login("ronaldo", "cr7");
    // echo $usuario;


    // $jogador = new Usuario("Rony", "pintounotificacao");
    // $jogador->insert();
    // echo $jogador;


    // $usuario = new Usuario();
    // $usuario->loadById(7);
    // $usuario->update("vini jr", "malvadeza");
    // echo $usuario;


    $usuario = new Usuario();
    $usuario->loadById(6);
    $usuario->delete();
    echo $usuario;
?>
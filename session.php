<?php

session_start();

require_once"configBD.php";

if(isset($_SESSION['nomeDoUsuario'])){
    //logado
    $usuario  = $_SESSION['nomeDoUsuario'];
    $sql = $connect->prepare("SELECT * FROM usuario
    WHERE nomeDoUsuario = ?" );
    $sql->bind_param("s", $usuario);
    $sql->execute();
    $resultado=$sql->get_result();
    $linha = $resultado->fetch_array(MYSQLI_ASSOC);


    $nomeDoUsuario = $linha['nomeDoUsuario'];
    $nomeCompleto = $linha['nomeCompleto'];
    $emailUsuario = $linha['emailUsuario'];
    $dataCriado= $dia['dataCriado'];   = date('d');
    $mes = date('m');
    $ano = date('Y');
    



}else{
    header("location:index.php");
}



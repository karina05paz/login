<?php

session_start();

require_once"configDB.php";

if(isset($_SESSION['nomeDoUsuario'])){
    //logado
}else{
    header("location:index.php");
}
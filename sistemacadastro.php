<?php
    session_start();
    include_once('conexao.php');
    //print_r($_REQUEST);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    ?>
<?php 
//conecta o programa ao banco
$usuario='root';
$senha='';
$database='bd_cadastro';
$host='localhost';

$mysqli= new mysqli ($host, $usuario, $senha, $database);

if ($mysqli -> error) {

    die ("Falha ao conectar ao banco de dados:" . $mysqli->error);

}



?>
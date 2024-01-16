<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Cadastro</title>

    <link rel="stylesheet" href="estilocadastro.css">
</head>
<body>
    
<?php require "cadastro.html"?>
<div> 
   <?php
    /*1- realizando a conexao com o banco de dados*/
       require "conexao.php";
       
    /*2- pegando os dados vindos do formulario e armazenando em variaveis */
     
    $nome=$_POST["nome"];
    $nome_usuario=$_POST["nome_usuario"];
    $email=$_POST["email"];
    $senha=$_POST["senha"];
    $nascimento=$_POST["nascimento"];

    /*3- criando o comando sql para insercao do registro */
     
    $comandoSql="insert into tb_usuario
        (nome, nome_usuario, email, senha, nascimento)
        values 
        ('$nome','$nome_usuario','$email','$senha', '$nascimento')";
    
    /*4- executando o comando sql */
    $resultado=mysqli_query($mysqli,$comandoSql);
    /*5- verificando se o comando sql foi executado*/
    if($resultado==true)
       
        header("Location:login.php");
       else
        echo "<span style='color:black;'>Erro no cadastro!!</span>";
?>
</div>
</body>
</html>
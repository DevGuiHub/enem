<?php
include ('conexao.php');

if (isset($_POST['nome_usuario']) || isset($_POST['senha'])){

    if(strlen($_POST['nome_usuario']) == 0){

        echo "Preencha seu nome de usuário";

    }else if(strlen ($_POST ['senha'])==0){
        echo "Preencha sua senha";
    } else {

        $nome_usuario = $mysqli-> real_escape_string($_POST ['nome_usuario']);
        $senha = $mysqli-> real_escape_string($_POST ['senha']);

        $sql_code="SELECT * FROM tb_usuario  WHERE nome_usuario='$nome_usuario' and senha='$senha'";
          
        $sql_query = $mysqli->query($sql_code) or die ("Falha na execução do código SQL" . $mysqli->error);


        $quantidade= $sql_query -> num_rows;
        if( $quantidade ==1){
          $nome_usuario=$sql_query -> fetch_assoc();

          if(!isset($_SESSION)){
            session_start();

          }

          header("Location:index.html");

        }else {
            echo "Falha ao logar, usuário ou senha incorretos";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title>Login</title>
    <link rel="stylesheet" href="estilologin.css" type="text/css">
  
</head>
<body>
    <form action="" method="POST">

            <div class="caixa">
                <h1>Login</h1>
            <input  type="text" name="nome_usuario" placeholder="Nome de usuário">
    <br><br>
            <input type="password" name="senha" placeholder="senha">
<br> <br>
            <button class="inputSubmit" type="submit"> Entrar </button>
</div>


</form>
</body>
</html>
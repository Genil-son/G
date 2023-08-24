<?php
include_once("conexão.php");

$nome=$_POST['nome'];
$email=$_POST['email'];
$senha=$_POST['senha'];
$sexo=$_POST['sexo'];
$insert="insert into paciente(nome,email,senha,sexo) values('$nome','$email','$senha','$sexo');";
$enviar=mysqli_query($Link,$insert);
?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registro.css">
    <link rel="icon" href="img/15.jpg">
    <title>cadastro</title>
</head>
<body>
    <div class="certo">
        <img src="img/22.jpg">
        <br>
        <h1>Olá! Acabaste de se registrar,e seu registro foi feito com sucesso caro paciente.</h1>
        <br>
        <h2>Agora já podes acessar na aplicação,clique em "entrar" obrigado.</h1>
        <br>
        <div class="link">
            <a href="home.php" class="link2">Entrar</a>
</div>
</div>

</body>
</html>
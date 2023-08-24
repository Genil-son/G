
<?php
include_once("conexão.php");

$email=$_POST['email'];
$senha=$_POST['senha'];
$insert="insert into paciente(email,senha) values('$email','$senha');";
$enviar=mysqli_query($Link,$insert);
?>

<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="senhamensagem.css">
    <title>Nova Senha</title>
</head>
<body>

<div class="certo">
        <img src="img/22.jpg">
        <br>
        <h1>Olá! Acabaste de recuperar e alterar à sua senha.</h1>
        <br>
        <h2>Agora já podes acessar na aplicação,basta clicares em "entrar".</h1>
        <br>
        <div class="link">
            <a href="home.php" class="link2">Entrar</a>
</div>
</div>

</body>
</html>
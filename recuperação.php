<?php
 include_once("conexão.php");
?>

<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar senha</title>
    <link rel="stylesheet" href="recuperação.css">
    <link rel="icon" href="img/saúde.jpg">
</head>
<body>  


<div class="form">
<img src="img/icon1.jpeg" class="icon">
<form action="Senhamensagem.php" method="POST">


<span class="senha2">Novo email</span>
<input type="int" placeholder="Insira o número ou email novo ou existente" class="form1"  name="email" required></input>
<br>

<span class="senha1">Nova Senha</span>
<input type="password" placeholder="insira a nova senha" class="form2" name="senha" required></input>
</div>

<div class="butão">
    <button type="submit">Salvar</button>
</div>

    <div class="rec">
<a href="login.php" class="rec1">sair</a>
</div>

</form>


</body>
</html>
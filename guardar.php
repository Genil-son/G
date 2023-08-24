<?php
 include_once("conexão.php");
?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="guardari.css">
    <link rel="icon" href="img/saúde.jpg">
</head>
<body>



        <div class="form0">
        <br>
        <form action="registro.php" method="POST">
        
            <img src="img/icon.jpeg" class="icon">
        <br>
        <h1>Registro</h1>
        <br>
            <div class="form1">
            <span class="for1">Nome</span>
            <input type="text" class="input1" placeholder="Insira seu nome" required name="nome"></input>
</div>
<br>
        <div class="form2">
            <span class="for2">Número</span>
            <input type="text" class="input2" placeholder="Insira seu número " required name="email"></input>
</div>
<br>
       <div class="form3">
            <span class="for3">Senha</span>
            <input type="Password" class="input3" placeholder="Insira sua senha" required name="senha"></input>
</div>
<br>
<div class="form4">
    <select name="sexo">
            <span>Sexo</span>
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
</select>
<div class="baixo">
<a href="login.php" class="volto">Sair</a>
</div>
</div>
<div class="butão">
    <button type="submit">Confirmar</button>
</div>
</form>
</div>

</body>
</html>
<?php
  
if(!empty($_GET['id']))
{
    include_once("conexão.php");

    $id= $_GET['id'];

    $sqlSelect = "SELECT  * FROM secretaria WHERE id=$id";

    $result = $Link->query($sqlSelect);

    if($result->num_rows> 0);
    {
while($registro = mysqli_fetch_assoc($result))
{
    $nome = $registro['nome'];
    $sexo = $registro['sexo'];
    $email = $registro['email'];
    $numero = $registro['numero'];
    $senha = $registro['senha'];
    $endereco = $registro['endereco'];
    $cargo = $registro['cargo'];
}

    }


}


else
{
    header('Location: consulfunc.php');
}
?>





<?php
include_once("conexão.php");
?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/saúde.jpg">
    <link rel="stylesheet" href="administrador.css">
    <title>Adicionar Secretário</title>
</head>
<body>





<form action="salvarfunc.php" method="POST" class="form">

<div class="pri-icon">

<img src="img/icon.jpeg" class="icon">
<br>
<span class="pri-span"><strong>Registro de funcionário</span></strong>
</div>


<div class="div-mae">

<div class="div-input">
<span><strong>Nome</span></strong>
<input type="text" placeholder="Insira o seu nome" name="nome" class="input1" required  value="<?php echo $nome ?>">
</div>

<div class="div-input1">
<span><strong>Cargo</span></strong>
<input type="text" placeholder="Insira o seu cargo" name="cargo" class="input2" required  value="<?php echo $cargo ?>">
</div>

</div>

<div class="div-mae">

<div class="div-input">
<span><strong>Email</span></strong>
<input type="text" placeholder="Insira o seu email" name="email" class="input1" required  value="<?php echo $email ?>">
</div>

<div class="div-numero">
<span><strong>Número</span></strong>
<input type="int" placeholder="Insira o seu número" name="numero" class="input2" required value="<?php echo $numero ?>">
</div>

</div>

<div class="div-mae">

<div class="div-senha">
<span><strong>Senha</span></strong>
<input type="password" placeholder="Insira a sua senha" name="senha" class="input1" required value="<?php echo $senha ?>">
</div>

<div class="div-endereco">
<span><strong>Endereço</span></strong>
<input type="int" placeholder="Insira o seu endereço" name="endereco" class="input2" required value="<?php echo $endereco ?>">
</div>

</div>

<div class="sexo">
<span><strong>Sexo</span></strong>
<select name="sexo" value="<?php echo $sexo ?>">
<option value="Masculino">Masculino</option>
<option value="Femenino">Femenino</option>
</select>

</div>

<input type="hidden" name="id" value="<?php echo $id ?>">
<button type="sumit" name="update" id="update">Registrar</button>
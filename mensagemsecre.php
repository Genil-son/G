<?php
include_once("conexão.php");

$nome=$_POST['nome'];
$cargo=$_POST['cargo'];
$email=$_POST['email'];
$numero=$_POST['numero'];
$senha=$_POST['senha'];
$endereco=$_POST['endereco'];
$sexo=$_POST['sexo'];
$insert="insert into secretaria(nome,cargo,email,numero,senha,endereco,sexo) values('$nome','$cargo','$email','$numero','$senha','$endereco,','$sexo');";
$enviar=mysqli_query($Link,$insert);
?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mensagemsecre.css">
    <link rel="icon" href="img/saúde.jpg">
    <title>Secretario Registrado</title>
</head>
<body>


<form>
<div class="form1">
<span><strong>Secretário registrado com sucesso</strong></span>
</div>

<div class="div-form">
<a href="administrador.php" class="link">Voltar</a>
</div>

</form>

</body>
</html>
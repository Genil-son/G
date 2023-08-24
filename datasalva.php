<?php
include_once("conexão.php");
$data=$_POST['data'];
$dia=$_POST['dia'];
$insert="insert into datas(data,dia) values('$data','$dia');";
$enviar=mysqli_query($Link,$insert);
?>

<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="datasalva.css">
    <link rel="icon" href="img/saúde.jpg">
    <title>Salvar Data</title>
</head>
<body>

<div class="div-form">

<div class="top">
<span><strong> A data foi adicionado com sucesso </span></strong>
</div>


<div class="div-top">
<a  href="data.php"> Sair </a>
</div>

</div>
    
</body>
</html>
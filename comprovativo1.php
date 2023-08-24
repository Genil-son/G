<?php
include_once("conexão.php");
$nome=$_POST['nome'];
$numero=$_POST['numero'];
$hora=$_POST['hora'];
$data=$_POST['data'];
$especialidade=$_POST['especialidade'];
$doctores=$_POST['doctores'];
$bilhete=$_POST['bilhete'];
$insert="insert into reagendamento(nome,numero,hora,data,especialidade,doctores,bilhete) values('$nome','$numero','$hora','$data','$especialidade','$doctores','$bilhete');";
$enviar=mysqli_query($Link,$insert);
?>

<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="comprovativo.css">
    <link rel="icon" href="img/saúde.jpg">
    <title>Comprovativo</title>
</head>
<body>

<img src="img/rea.jpg">

</body>
</html>
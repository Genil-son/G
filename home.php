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
    <link rel="stylesheet" href="homi.css">
    <title>Marcação de consulta</title>
</head>
<body>


<form class="div-form">


<?php
echo "<table border=10>";
echo "<tr>";
echo "<th class='dia'>Dia de semana</th>";
echo "<th class='data'>Data Desponível</th>";
echo "</tr>";


$Hostname="localhost";
$Usuario="root";
$Senha="";
$Nome_da_BD="centro";
$Link=new mysqli($Hostname,$Usuario,$Senha,$Nome_da_BD);
$sql = "SELECT * FROM datas";
$resultado = mysqli_query($Link,$sql);

while ($registro = mysqli_fetch_array($resultado))
{
    $id = $registro['id'];
    $dia = $registro['dia'];
    $data = $registro['data'];
    echo "<tr>";
    echo "<td class='div-dia'>".$dia."</td>";
    echo "<td class='div-data'>".$data."</td>";

    echo "</tr>";
}

mysqli_close($Link);
echo "</table>";
?>


</form>

<nav>


<ul>
<li class="home">Home</li>   
<br>
<li><a href="marcação.php">Marcação</a></li>
<br>
<li><a href="reagendamento.php">Reagendar</a></li>
<br>
<div class="sair">
<li><a href="login.php">Sair</a></li>
</div>
</ul>




<div class="footer">

    <div class="fot1">
<span><strong>WWW.CASSEQUEL.COM</strong></span>
</div>
<br>
<div class="fot">
<span><strong>958206219 </strong></span>
<img src="img/icon9.png" class="img">
</div>

</div>

</nav>

<div class="imagem">
<img src="img/agenda1.jpeg">
</div>

    
</body>
</html>
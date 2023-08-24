<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/saúde.jpg">
   <link rel="stylesheet" href="buscadata.css">
    <title>Adicionar Secretario</title>
</head>
<body>



    
<nav>

<div class="nav">

<div class="div-calendar">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="calendar" viewBox="0 0 16 16">
  <path d="M8 7a.5.5 0 0 1 .5.5V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5A.5.5 0 0 1 8 7z"/>
  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
</svg>
</div>


</div>

<div class="btn">
<a href="busca.php" class="bt">Voltar</a>
</div>

</nav>



<form>


<?php
echo "<table border=10>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>Dia de semana</th>";
echo "<th>Data Desponível</th>";
echo "<th>.......</th>";
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
    echo "<td>".$id."</td>";
    echo "<td>".$dia."</td>";
    echo "<td>".$data."</td>";
   echo "<td>
    <a href=' editdata.php?id=$registro[id]' class='edit'>Editar</a>
    <hr>
<div class='icone'>
    <a href='datadelete.php?id=$registro[id]'>
    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='apagar' viewBox='0 0 16 16'>
    <path d='M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z'/>
    </svg>
    </a>    
    </div>
    </td>";

    echo "</tr>";
}

mysqli_close($Link);
echo "</table>";
?>


</form>


</body>
</html>
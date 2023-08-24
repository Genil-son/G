<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/saúde.jpg">
   <link rel="stylesheet" href="consulfu.css">
    <title>Consultas marcadas</title>
</head>
<body>
    
   
<nav>

<div class="nav">

<img src="img/saúde.jpg">

<div class="texto">
<span> <strong> Registro de Secretário </strong> </span>
</div>

</div>

<div class="btn">
<a href="administrador.php" class="voltar">Voltar</a>
</div>

</nav>


<form>


<?php
echo "<table border=10>";
echo "<tr>";
echo "<th>id</th>";
echo "<th>nome</th>";
echo "<th>sexo</th>";
echo "<th>email</th>";
echo "<th>numero</th>";
echo "<th>senha</th>";
echo "<th>endereco</th>";
echo "<th>cargo</th>";
echo "<th>.......</th>";
echo "</tr>";


$Hostname="localhost";
$Usuario="root";
$Senha="";
$Nome_da_BD="centro";
$Link=new mysqli($Hostname,$Usuario,$Senha,$Nome_da_BD);
$sql = "SELECT * FROM secretaria";
$resultado = mysqli_query($Link,$sql);

while ($registro = mysqli_fetch_array($resultado))
{
    $id = $registro['id'];
    $nome = $registro['nome'];
    $sexo = $registro['sexo'];
    $email = $registro['email'];
    $numero = $registro['numero'];
    $senha = $registro['senha'];
    $endereco = $registro['endereco'];
    $cargo = $registro['cargo'];
    echo "<tr>";
    echo "<td>".$id."</td>";
    echo "<td>".$nome."</td>";
    echo "<td>".$sexo."</td>";
    echo "<td>".$email."</td>";
    echo "<td>".$numero."</td>";
    echo "<td>".$senha."</td>";
    echo "<td>".$endereco."</td>";
    echo "<td>".$cargo."</td>";
    echo "<td>

    <a href='editfunc.php?id=$registro[id]' class='edit'>Editar</a>
<div class='icone'>
    <a href='deletefunc.php?id=$registro[id]'>
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
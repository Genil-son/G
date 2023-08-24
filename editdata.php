<?php
  
if(!empty($_GET['id']))
{
    include_once("conexão.php");

    $id= $_GET['id'];

    $sqlSelect = "SELECT  * FROM datas WHERE id=$id";

    $result = $Link->query($sqlSelect);

    if($result->num_rows> 0);
    {
while($registro = mysqli_fetch_assoc($result))
{
    
    $dia=$registro['dia'];
    $data=$registro['data'];  
}

    }


}


else
{
    header('Location: buscadata.php');
}

?>






<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/saúde.jpg">
   <link rel="stylesheet" href="datas.css">
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
<a href="buscadata.php" class="bt">Voltar</a>
</div>

</nav>

<br>


<br>
<form action=" salvadata.php" method="POST">

<div class="color">
<img src="img/saúde.jpg">
<br>
<fieldset>
    
<div class="adi">
<span></strong> Adicionar data</span></strong>
</div>
<br>
<div class="div-input">
<input type="text" placeholder="Insira a data" required name="data" value="<?php echo $data ?>">
</div>

<br>
<div class="div-input1">
<input type="text" placeholder="Insira o dia de semana" required name="dia" value="<?php echo $dia ?>">
</div>
<input type="hidden" name="id" value="<?php echo $id ?>">
<button type="Submit" name="update" id="update">Adicionar</button>

</fieldset>

</div>
</form>






</body>
</html>
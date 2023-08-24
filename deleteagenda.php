<?php
  
if(!empty($_GET['cod_reagendamento']))
{
    include_once("conexão.php");

    $cod_reagendamento= $_GET['cod_reagendamento'];

    $sqlSelect = "SELECT  * FROM reagendamento WHERE cod_reagendamento=$cod_reagendamento";

    $result = $Link->query($sqlSelect);

    if($result->num_rows> 0);
    {
$sqlDelete = "DELETE FROM reagendamento WHERE cod_reagendamento=$cod_reagendamento";
$resultDelete = $Link->query($sqlDelete);

    }
}

header('Location: consultaagenda.php');
?>
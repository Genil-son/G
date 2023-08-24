<?php
  
if(!empty($_GET['cod_marcacao']))
{
    include_once("conexão.php");

    $cod_marcacao= $_GET['cod_marcacao'];

    $sqlSelect = "SELECT  * FROM marcacao WHERE cod_marcacao=$cod_marcacao";

    $result = $Link->query($sqlSelect);

    if($result->num_rows> 0);
    {
$sqlDelete = "DELETE FROM marcacao WHERE cod_marcacao=$cod_marcacao";
$resultDelete = $Link->query($sqlDelete);

    }
}

    header('Location: consultamarcacao.php');
?>
<?php
  
if(!empty($_GET['id']))
{
    include_once("conexão.php");

    $id= $_GET['id'];

    $sqlSelect = "SELECT  * FROM datas WHERE id=$id";

    $result = $Link->query($sqlSelect);

    if($result->num_rows> 0);
    {
$sqlDelete = "DELETE FROM datas WHERE id=$id";
$resultDelete = $Link->query($sqlDelete);

    }
}

header('Location: buscadata.php');
?>
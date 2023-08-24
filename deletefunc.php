<?php
  
if(!empty($_GET['id']))
{
    include_once("conexão.php");

    $id= $_GET['id'];

    $sqlSelect = "SELECT  * FROM ecretaria WHERE id=$id";

    $result = $Link->query($sqlSelect);

    if($result->num_rows> 0);
    {
$sqlDelete = "DELETE FROM secretaria WHERE id=$id";
$resultDelete = $Link->query($sqlDelete);

    }
}

header('Location: consulfunc.php');
?>
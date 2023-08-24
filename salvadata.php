<?php
 include_once("conexão.php");


if(isset($_POST['update']))
{
$id=$_POST['id'];
$data=$_POST['data'];
$dia=$_POST['dia'];

$sqlUpdate = "UPDATE datas SET data='$data',dia='$dia' WHERE id='$id'";
$result = $Link->query($sqlUpdate);

}

header('Location: buscadata.php');

?>
<?php
 include_once("conexão.php");


if(isset($_POST['update']))
{
$id=$_POST['id'];
$nome=$_POST['nome'];
$mensagem=$_POST['mensagem'];

$sqlUpdate = "UPDATE mensagens SET nome='$nome',mensagem='$mensagem' WHERE id='$id'";
$result = $Link->query($sqlUpdate);

}

header('Location: smsresul.php');

?>
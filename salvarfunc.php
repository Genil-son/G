<?php
 include_once("conexão.php");


if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $sexo = $_POST['sexo'];
    $email = $_POST['email'];
    $numero = $_POST['numero'];
    $senha = $_POST['senha'];
    $endereco = $_POST['endereco'];
    $cargo = $_POST['cargo'];

$sqlUpdate = "UPDATE secretaria SET nome='$nome',sexo='$sexo',email='$email',numero='$numero',senha='$senha',endereco='$endereco',cargo='$cargo' WHERE id='$id'";
$result = $Link->query($sqlUpdate);

}

header('Location: consulfunc.php');

?>
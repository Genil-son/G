<?php
  
if(!empty($_GET['id']))
{
    include_once("conexão.php");

    $id= $_GET['id'];

    $sqlSelect = "SELECT  * FROM mensagens WHERE id=$id";

    $result = $Link->query($sqlSelect);

    if($result->num_rows> 0);
    {
while($registro = mysqli_fetch_assoc($result))
{
    $nome=$registro['nome'];
    $mensagem=$registro['mensagem'];  
}

    }


}


else
{
    header('Location: smsresul.php');
}

?>

<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/saúde.jpg">
    <link rel="stylesheet" href="mensagem.css">
    <title>Mensagem</title>
</head>
<body>


<div class="btn-volt">
<a href="smsresul.php" class="btn-volt1">Voltar</a>
</div>





<form action="salvedit.php" method="POST">

<div class="form-geral">

<div class="pri-form">
<span class="pri-span"><strong>Nome</strong></span>
<input type="text" placeholder="insira o seu nome" class="pri-input" required name="nome" value="<?php echo $nome ?>"></input>
</div>

<div class="seg-form">
<span class="seg-span"><strong>Mensagem</strong></span>
<input type="text" placeholder=" Escreva aqui o seu comentário do que achou da página de marcação de consultas" class="seg-input" required name="mensagem"value="<?php echo $mensagem ?>"></input>
</div>


</div>
<div class="flex">
    <input type="hidden" name="id" value="<?php echo $id ?>">
<button type="submit" name="update" id="update">Enviar</button>
<img src="img/mensagem.png" class="fundo-img">
</div>

</form>
    



<footer>

  <div class="footer">

  <span class="footer-top1"><strong>CENTROCASSEQUEL@20GMAIL.COM</strong></span>


  <br>


  <div class="fot4">
  <img src="img/icon9.png" class="img3">
  <span><strong>958206219 </strong></span>
</div>

  
<div class="fot00">
  <img src="img/facebook.jpeg" class="img3">
  <span><strong>WWW.CASSEQUEL.COM</strong></span>
</div>

</div>
 <div class="cent">
 <span><strong class="cent1">CENTRO DESDE 1988</strong></span>
</div>

</footer>


</body>
</html>
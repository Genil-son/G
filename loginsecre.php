<?php
require_once("conexão.php");
session_start();

if(isset($_POST['btn'])):
    $erros=array();
    $numero=mysqli_escape_string($Link,$_POST['numero']);
    $senha=mysqli_escape_string($Link,$_POST['senha']);
    if(empty($numero) or empty($senha)):
        
    else:
        $sql="select *from secretaria where(numero='$numero' and senha='$senha');";
        $result=mysqli_query($Link,$sql);
        if(mysqli_num_rows($result)>0):
            header("Location:busca.php");
        else:
            echo "<span><strong>FALHA DE LOGIN!</strong></span>";
        endif;

    endif;
    endif
?>
<br>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secretaria</title>
    <link rel="icon" href="img/saúde.jpg">
    <link rel="stylesheet" href="logsecr.css">
</head>
<body>
    <?php
    if(!empty($erros)):
        foreach($erros as $erro):
            echo $erro;
        endforeach;
    endif;
    ?>
  
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" >

    <div class="foto">
<img src="img/saúde.jpg">
<br>
</div>

    <br>
    <div class="top">
        
    <h1>Login</h1>
</div>
    <div class="input0">
    <input type="int" placeholder="Insira o seu número" name="numero" required class="input1">
</div>
    <br>
    <div class="input3">
    <input type="password" placeholder="Insira sua senha" name="senha"  required class="input2">
    </div>
    <br>
    <div class="btn-div">
    <button type="submit" name="btn">Entrar</button>
    </div>
    <br>

<a href="index.php" class="sair"> Sair</a>

</form>


</body>
</html>
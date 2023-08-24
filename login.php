<?php
require_once("conexão.php");
session_start();

if(isset($_POST['btn'])):
    $erros=array();
    $email=mysqli_escape_string($Link,$_POST['email']);
    $senha=mysqli_escape_string($Link,$_POST['senha']);
    if(empty($email) or empty($senha)):
        
    else:
        $sql="select *from paciente where(email='$email' and senha='$senha');";
        $result=mysqli_query($Link,$sql);
        if(mysqli_num_rows($result)>0):
            header("Location:home.php");
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
    <title>Login</title>
    <link rel="icon" href="img/saúde.jpg">
    <link rel="stylesheet" href="logi.css">
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
    
    <br>
    <div class="top">
        
    <h1>Login</h1>
</div>
    <div class="input0">
  
    <input type="text" placeholder="Insira o seu número ou email" name="email" required class="input1">
    <br>
    <div class="input3">
    <input type="password" placeholder="Insira sua senha" name="senha"  required class="input2">
    </div>
    <br>
    <div class="btn">
    <button type="submit" name="btn">Entrar</button>
    </div>
    <br>
    <div class="link1">
     <a href="recuperação.php" class="link2">Esqueceu a senha</a> 
     <br>
      <a href="guardar.php" class="link">Registrar-Se</a> 
    <br>
    <a href="index.php" class="link2">Sair</a>  
    </div>
    </div>
</form>

<img src="img/saúde.jpg" class="jpg">
</body>
</html>
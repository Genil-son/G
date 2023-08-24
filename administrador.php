<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/saúde.jpg">
    <link rel="stylesheet" href="administrador.css">
    <title>Adicionar Secretário</title>
</head>
<body>



 
<nav>


<ul>
<li class="home">Home</li>   
<br>

<p>&nbsp;</p>
<form class="form-2">
<a href="index.php" class="func">Página Inicial</a>
</form>
<br>

<form name="paciente" action="consulfunc.php" method="POST" class="form-2">
<a href="consulfunc.php" class="func">Secretários</a>
</form>
<br>
<form class="form-2">
<a href="busca.php" class="func">Consultas</a>
</form>


</div>

<div class="sair">
<li><a href="loginadm.php">Sair</a></li>
</div>
</ul>




<div class="footer">

    <div class="fot1">
<span><strong>WWW.CASSEQUEL.COM</strong></span>
</div>
<br>
<div class="fot">
<span><strong>958206219 </strong></span>
<img src="img/icon9.png" class="img">
</div>

</div>

</nav>


<form action="mensagemsecre.php" method="POST" class="form">

<div class="pri-icon">

<img src="img/icon.jpeg" class="icon">
<br>
<span class="pri-span"><strong>Registro de funcionário</span></strong>
</div>


<div class="div-mae">

<div class="div-input">
<span><strong>Nome</span></strong>
<input type="text" placeholder="Insira o seu nome" name="nome" class="input1" required>
</div>

<div class="div-input1">
<span><strong>Cargo</span></strong>
<input type="text" placeholder="Insira o seu cargo" name="cargo" class="input2" required>
</div>

</div>

<div class="div-mae">

<div class="div-input">
<span><strong>Email</span></strong>
<input type="text" placeholder="Insira o seu email" name="email" class="input1" required>
</div>

<div class="div-numero">
<span><strong>Número</span></strong>
<input type="int" placeholder="Insira o seu número" name="numero" class="input2" required>
</div>

</div>

<div class="div-mae">

<div class="div-senha">
<span><strong>Senha</span></strong>
<input type="password" placeholder="Insira a sua senha" name="senha" class="input1" required>
</div>

<div class="div-endereco">
<span><strong>Endereço</span></strong>
<input type="int" placeholder="Insira o seu endereço" name="endereco" class="input2" required>
</div>

</div>

<div class="sexo">
<span><strong>Sexo</span></strong>
<select name="sexo">
<option value="Masculino">Masculino</option>
<option value="Femenino">Femenino</option>
</select>

</div>


<button type="sumit">Registrar</button>

</form>

    
</body>
</html>
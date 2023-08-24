<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/saúde.jpg">
    <link rel="stylesheet" href="buscas.css">
    <title>Verificar Consultas</title>
</head>
<body>
   

<nav>


<ul>
<li class="home">Home</li>   
<br>
<li> <a href="data.php">Adicionar data<a></li>  
<br>
<li> <a href="buscadata.php">Editar data<a></li>
<br>
<li> <a href="smsresul.php">Mensagem<a></li> 
<br>
<div class="sair">
<li><a href="loginsecre.php">Sair</a></li>
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


<svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" fill="currentColor" class="icon" viewBox="0 0 16 16">
  <path d="M5 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm4-2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5ZM9 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 9 8Zm1 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5Z"/>
  <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2ZM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H8.96c.026-.163.04-.33.04-.5C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1.006 1.006 0 0 1 1 12V4Z"/>
</svg>
<br>
<span class="verificar"><strong>Verificação de consultas marcadas e reagendadas</strong></span>

<div class="formulario">

<div class="marcacao">

    <img src="img/saúde.jpg" class="foto1">
    <br>
    <span class="span"><strong>Consultas Marcadas</strong></span>
    <br>
<p>&nbsp;</p>
        <form name="paciente" action="consultamarcacao.php" method="POST">
<input type="submit" name="consulta-completa" value="Verificar" class="input1">
</form>
</div>

<div class="reagendar">
<img src="img/saúde.jpg" class="foto1">
    <br>
    <span class="span1"><strong>Consultas Reagendadas</strong></span>
    <br>
<p>&nbsp;</p>
        <form name="paciente" action="consultaagenda.php" method="POST" class="form-2">
<input type="submit" name="consulta-completa" value="Verificar" class="input2">
</form>
</div>

</div>


</body>
</html>
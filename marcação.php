<?php
include_once("conexão.php");
?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/saúde.jpg">
    <link rel="stylesheet" href="marc.css">
    <title>Marcação de consulta</title>
</head>
<body>


<form action="comprovativo.php" method="POST">

<div class="icone">
<img src="img/saúde.jpg" class="pri-imagem">
<br>
<span class="span-icone">Marcação de Consultas</span>
<br>
<span class="span-icone1">Centro de Saúde do Cassequel</span>
</div>

<div class="form1">

<div class="input-div">
    <span><strong>Nome</strong></span>
<input type="text"placeholder="Insira o seu nome" class="input1" required name="nome"></input>
</div>

<div class="input-div1">
<span><strong>Número</strong></span>
<input type="int"placeholder="Insira o seu número" class="input2" required name="numero"></input>
</div>
<br>
</div>

<div class="form-display">

<div class="form2">
<span class="span-time"><strong>Hora</strong></span>
<select name="hora">
    <option value="Nenhuma hora selecionada">Selecionada hora</option>
    <option value="8horas">8horas </option>
    <option value="13horas">11horas </option>
</select>
</div>

<div class="form3">
<span><strong>Data</strong></span>
<select name="data">
    <option value="Nenhuma data selecionada">Selecionar data</option>
    <option value="17/07/2023">17/07/2023 </option>
    <option value="19/07/2023">19/07/2023 </option>
</select>
</div>

</div>

<div class="form4">

<div class="form5">
<span><strong>Esp</strong></span>
<select name="especialidade">
    <option value="Escolha a especialidade">Escolha a especialidade</option>
    <option value="Planeamento Familiar">Planeamento Familiar</option>
    <option value="Nutrição">Nutrição</option>
    <option value="Estomatologia">Estomatologia</option>
    <option value="Medicina Geral">Medicina Geral</option>
    <option value="Clínica Geral">Clínica Geral</option>
    <option value="Sate H.I.V">Sate H.I.V</option>
    <option value="Ecografia">Ecografia</option>
    <option value="Pediatria">Pediatria</option>
    <option value="Psicologia">Psicologia</option>
</select>
</div>


<div class="form6">
<span><strong>Doctores/a</strong></span>
<select name="doctores">
    <option value="Seleciona um doctor">Seleciona um doctor</option>
    <option value="Josefa Miguel(Planeamento)">Josefa Miguel(Planeamento)</option>
    <option value="Bunda Paulo(Nutricionista)">Bunda Paulo(Nutricionista)</option>
    <option value="Míria Ngunga(Estomatologista">Míria Ngunga(Estomatologista)</option>
    <option value="Madalena Candala(Médica Assistente)">Madalena Candala(Médica Assistente) </option>
    <option value="Augusta Gaspar(Doctora)">Augusta Gaspar(Doctora) </option>
    <option value="Sandra Limas(Sate H.I.V) ">Sandra Limas(Sate H.I.V) </option>
    <option value="Manuel Domingos(Ecografia)">Manuel Domingos(Ecografia) </option>
    <option value="António Samuel(Pediatra) ">António Samuel(Pediatra)  </option>
    <option value="Coelha Gaspar(Psicóloga)">Coelha Gaspar(Psicóloga) </option>
</select>
</div>

</div>

<div class="bi">
<span><strong>BI</strong></span>
<input type="int"placeholder="Insira o número do bilhete" class="input2" required name="bilhete"></input>
</div>
<br>
</div>
<br>
<div class="button">
<button type="submit">Marcar</button>
</div>

</form>




<nav>

<ul>
<li><a href="home.php" class="home">Home</a></li>   
<br>
<li class="marcacao">Marcação</li>
<br>
<li><a href="reagendamento.php" class="reagendar">Reagendar</a></li>
<br>

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





</body>
</html>
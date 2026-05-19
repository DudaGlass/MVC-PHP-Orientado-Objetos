<?php

if(!isset($_SESSION))
{
    session_start();
}

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

<meta charset="UTF-8">

<link rel="stylesheet"
href="https://www.w3schools.com/w3css/4/w3.css">

<title>Painel ADM</title>

</head>

<body class="w3-light-grey">

<div class="w3-padding-large">

<header class="w3-container w3-center">

<h1 class="w3-panel w3-cyan w3-round-large w3-text-white">
ADMINISTRAÇÃO
</h1>

<h2 class="w3-panel w3-cyan w3-round-large w3-text-white">
SISTEMA DE CURRÍCULOS
</h2>

</header>

<form action="/Controller/navegacao.php"
method="post"
class="w3-center">

<button name="btnListarCadastrados"
class="w3-button w3-blue w3-round-large w3-margin">

Usuários Cadastrados

</button>

<button name="btnListarADM"
class="w3-button w3-green w3-round-large w3-margin">

Administradores

</button>

</form>

</div>

</body>
</html>
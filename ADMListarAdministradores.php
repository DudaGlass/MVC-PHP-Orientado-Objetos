<?php

require_once __DIR__ . '/Controller/AdministradorController.php';

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

<title>Administradores</title>

</head>

<body>

<header class="w3-container w3-center w3-padding-24">

<h1 class="w3-panel w3-cyan w3-round-large w3-text-white">
Administradores Cadastrados
</h1>

<p class="w3-text-grey">Clique em "Visualizar" para ver todos os dados do administrador cadastrado.</p>

</header>

<div class="w3-content w3-margin-bottom">

<table class="w3-table-all w3-centered w3-card-4">

<tr class="w3-blue">

<th>Código</th>
<th>Nome</th>
<th>CPF</th>
<th>Visualizar</th>

</tr>

<?php

$adm = new AdministradorController();

$results = $adm->gerarLista();

while($row = $results->fetch_object())
{
    echo "<tr>";

    echo "<td>".$row->idadministrador."</td>";

    echo "<td>".$row->nome."</td>";

    echo "<td>".$row->cpf."</td>";

    echo "<td><a href=\"ADMVisualizarCadastro.php?id=".$row->idadministrador."\" class=\"w3-button w3-green w3-round-large\">Visualizar</a></td>";

    echo "</tr>";
}

?>

</table>

<div class="w3-center w3-margin-top">
    <form action="/Controller/navegacao.php" method="post" class="w3-inline">
        <button name="btnVoltar" class="w3-button w3-blue w3-round-large w3-margin">
            Voltar
        </button>
    </form>
</div>

</div>

</body>
</html>
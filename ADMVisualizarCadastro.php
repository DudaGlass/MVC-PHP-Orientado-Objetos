<?php

require_once __DIR__ . '/Controller/AdministradorController.php';

if(!isset($_SESSION))
{
    session_start();
}

$mensagem = '';
$administrador = null;

if(isset($_GET['id']) && is_numeric($_GET['id']))
{
    $id = intval($_GET['id']);

    $controller = new AdministradorController();
    $administrador = $controller->buscarPorId($id);

    if($administrador === null)
    {
        $mensagem = 'Administrador não encontrado.';
    }
}
else
{
    $mensagem = 'ID de administrador inválido.';
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Visualizar Cadastro</title>
</head>

<body class="w3-light-grey">

<div class="w3-container w3-padding-32 w3-content">
    <div class="w3-card-4 w3-white w3-round-large w3-padding-large">
        <header class="w3-container w3-cyan w3-round-large w3-margin-bottom">
            <h2 class="w3-text-white">Visualizar Cadastro do Administrador</h2>
        </header>

        <?php if($administrador !== null): ?>

            <div class="w3-row w3-margin-bottom">
                <div class="w3-col m4 l3"><strong>Código:</strong></div>
                <div class="w3-rest"><?php echo $administrador->getID(); ?></div>
            </div>

            <div class="w3-row w3-margin-bottom">
                <div class="w3-col m4 l3"><strong>Nome:</strong></div>
                <div class="w3-rest"><?php echo htmlspecialchars($administrador->getNome(), ENT_QUOTES, 'UTF-8'); ?></div>
            </div>

            <div class="w3-row w3-margin-bottom">
                <div class="w3-col m4 l3"><strong>CPF:</strong></div>
                <div class="w3-rest"><?php echo htmlspecialchars($administrador->getCPF(), ENT_QUOTES, 'UTF-8'); ?></div>
            </div>

            <div class="w3-row w3-margin-bottom">
                <div class="w3-col m4 l3"><strong>Senha:</strong></div>
                <div class="w3-rest"><?php echo htmlspecialchars($administrador->getSenha(), ENT_QUOTES, 'UTF-8'); ?></div>
            </div>

        <?php else: ?>

            <div class="w3-panel w3-pale-red w3-border-red">
                <p><?php echo $mensagem; ?></p>
            </div>

        <?php endif; ?>

        <div class="w3-center w3-margin-top">
            <a href="ADMListarAdministradores.php" class="w3-button w3-blue w3-round-large">Voltar à lista</a>
        </div>
    </div>
</div>

</body>
</html>

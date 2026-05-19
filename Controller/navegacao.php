<?php

if(isset($_POST["btnADM"]))
{
    include_once '../View/ADMLogin.php';
}

if(isset($_POST["btnLoginADM"]))
{
    require_once '../Controller/AdministradorController.php';

    $aController = new AdministradorController();

    if($aController->login($_POST['txtLoginADM'],
    $_POST['txtSenhaADM']))
    {
        include_once '../View/ADMPrincipal.php';
    }
}

if(isset($_POST["btnListarADM"]))
{
    include_once '../View/ADMListarAdministradores.php';
}

if(isset($_POST["btnVoltar"]))
{
    include_once '../View/ADMPrincipal.php';
}

?>
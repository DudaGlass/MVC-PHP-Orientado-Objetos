<?php

if(!isset($_SESSION))
{
    session_start();
}

class AdministradorController
{
    public function login($cpf, $senha)
    {
        require_once __DIR__ . '/../Model/Administrador.php';

        $administrador = new Administrador();

        $administrador->carregarAdministrador($cpf);

        if($administrador->getSenha() == $senha)
        {
            $_SESSION['Administrador'] = serialize($administrador);

            return true;
        }
        else
        {
            return false;
        }
    }

    public function gerarLista()
    {
        require_once __DIR__ . '/../Model/Administrador.php';

        $a = new Administrador();

        return $a->listaCadastrados();
    }

    public function buscarPorId($id)
    {
        require_once __DIR__ . '/../Model/Administrador.php';

        $a = new Administrador();

        if($a->carregarAdministradorPorId($id))
        {
            return $a;
        }

        return null;
    }
}
?>
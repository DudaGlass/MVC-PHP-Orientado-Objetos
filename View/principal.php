<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet"
        href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Sistema de Currículos</title>

    <style>

        .w3-sidebar {
            width: 120px;
        }

        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Montserrat", sans-serif;
        }

    </style>

</head>

<body class="w3-light-grey">

    <!-- MENU LATERAL -->
    <nav class="w3-sidebar w3-bar-block w3-center w3-blue">

        <a href="#home"
            class="w3-bar-item w3-button w3-hover-light-grey w3-hover-text-cyan w3-text-light-grey">

            <i class="fa fa-home w3-xxlarge"></i>
            <p>HOME</p>

        </a>

        <a href="#dPessoais"
            class="w3-bar-item w3-button w3-hover-light-grey w3-hover-text-cyan w3-text-light-grey">

            <i class="fa fa-address-book-o w3-xxlarge"></i>
            <p>Dados Pessoais</p>

        </a>

        <a href="#formacao"
            class="w3-bar-item w3-button w3-hover-light-grey w3-hover-text-cyan w3-text-light-grey">

            <i class="fa fa-mortar-board w3-xxlarge"></i>
            <p>Formação</p>

        </a>

        <a href="#outrasFormacoes"
            class="w3-bar-item w3-button w3-hover-light-grey w3-hover-text-cyan w3-text-light-grey">

            <i class="fa fa-graduation-cap w3-xxlarge"></i>
            <p>Outras Formações</p>

        </a>

        <a href="#eProfissional"
            class="w3-bar-item w3-button w3-hover-light-grey w3-hover-text-cyan w3-text-light-grey">

            <i class="fa fa-briefcase w3-xxlarge"></i>
            <p>Experiência</p>

        </a>

    </nav>

    <!-- CONTEÚDO -->
    <div class="w3-padding-large" id="main">

        <!-- HOME -->
        <header class="w3-container w3-padding-32 w3-center" id="home">

            <h1>
                <img src="Img/Enlatados.png"
                    alt="Logo"
                    class="w3-image"
                    width="40%">
            </h1>

            <h1 class="w3-text-cyan">
                SISTEMA DE CURRÍCULOS
            </h1>

        </header>

        <!-- DADOS PESSOAIS -->
        <section id="dPessoais">

            <div class="w3-padding-64 w3-content w3-text-grey">

                <h2 class="w3-text-cyan">
                    Dados Pessoais
                </h2>

            </div>

            <form action=""
                method="post"
                class="w3-row w3-light-grey w3-text-blue w3-margin"
                style="width:70%;">

                <input type="hidden" name="txtID">

                <input class="w3-input w3-border w3-round-large w3-margin"
                    name="txtNome"
                    type="text"
                    placeholder="Nome Completo">

                <input class="w3-input w3-border w3-round-large w3-margin"
                    name="txtCPF"
                    type="text"
                    placeholder="CPF">

                <input class="w3-input w3-border w3-round-large w3-margin"
                    name="txtData"
                    type="date">

                <input class="w3-input w3-border w3-round-large w3-margin"
                    name="txtEmail"
                    type="text"
                    placeholder="Email">

                <button name="btnAtualizar"
                    class="w3-button w3-blue w3-block w3-round-large">

                    Atualizar Dados

                </button>

            </form>

        </section>

        <!-- FORMAÇÃO -->
        <section id="formacao">

            <div class="w3-padding-64 w3-content w3-text-grey">

                <h2 class="w3-text-cyan">
                    Formação Acadêmica
                </h2>

            </div>

            <form action=""
                method="post"
                class="w3-row w3-light-grey w3-text-blue w3-margin"
                style="width:70%;">

                <input class="w3-input w3-border w3-round-large w3-margin"
                    name="txtInicioFA"
                    type="date">

                <input class="w3-input w3-border w3-round-large w3-margin"
                    name="txtFimFA"
                    type="date">

                <input class="w3-input w3-border w3-round-large w3-margin"
                    name="txtDescFA"
                    type="text"
                    placeholder="Descrição da Formação">

                <button name="btnAddFormacao"
                    class="w3-button w3-blue w3-block w3-round-large">

                    Adicionar Formação

                </button>

            </form>

            <table class="w3-table-all w3-centered">

                <tr class="w3-blue">

                    <th>Início</th>
                    <th>Fim</th>
                    <th>Descrição</th>
                    <th>Apagar</th>

                </tr>

            </table>

        </section>

        <!-- OUTRAS FORMAÇÕES -->
        <section id="outrasFormacoes">

            <div class="w3-padding-64 w3-content">

                <h2 class="w3-text-cyan">
                    Outras Formações
                </h2>

            </div>

            <form action=""
                method="post"
                class="w3-row w3-light-grey w3-text-blue w3-margin"
                style="width:70%;">

                <input class="w3-input w3-border w3-round-large w3-margin"
                    name="txtInicioOF"
                    type="date">

                <input class="w3-input w3-border w3-round-large w3-margin"
                    name="txtFimOF"
                    type="date">

                <input class="w3-input w3-border w3-round-large w3-margin"
                    name="txtDescOF"
                    type="text"
                    placeholder="Descrição">

                <button name="btnAddOF"
                    class="w3-button w3-blue w3-block w3-round-large">

                    Adicionar Outra Formação

                </button>

            </form>

            <table class="w3-table-all w3-centered">

                <tr class="w3-blue">

                    <th>Início</th>
                    <th>Fim</th>
                    <th>Descrição</th>
                    <th>Apagar</th>

                </tr>

            </table>

        </section>

        <!-- EXPERIÊNCIA PROFISSIONAL -->
        <section id="eProfissional">

            <div class="w3-padding-64 w3-content">

                <h2 class="w3-text-cyan">
                    Experiência Profissional
                </h2>

            </div>

            <form action=""
                method="post"
                class="w3-row w3-light-grey w3-text-blue w3-margin"
                style="width:70%;">

                <input class="w3-input w3-border w3-round-large w3-margin"
                    name="txtInicioEP"
                    type="date">

                <input class="w3-input w3-border w3-round-large w3-margin"
                    name="txtFimEP"
                    type="date">

                <input class="w3-input w3-border w3-round-large w3-margin"
                    name="txtEmpEP"
                    type="text"
                    placeholder="Empresa">

                <input class="w3-input w3-border w3-round-large w3-margin"
                    name="txtDescEP"
                    type="text"
                    placeholder="Descrição">

                <button name="btnAddEP"
                    class="w3-button w3-blue w3-block w3-round-large">

                    Adicionar Experiência

                </button>

            </form>

            <table class="w3-table-all w3-centered">

                <tr class="w3-blue">

                    <th>Início</th>
                    <th>Fim</th>
                    <th>Empresa</th>
                    <th>Descrição</th>
                    <th>Apagar</th>

                </tr>

            </table>

        </section>

    </div>

</body>

</html>
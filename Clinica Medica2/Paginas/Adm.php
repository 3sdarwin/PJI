<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADM</title>
    <link rel="icon" href="imgs/icone.png">
    <link rel="stylesheet" href="../css/estiloAdm.css">
</head>

<body>
    <div class="btnCadFunc">

        <?php
            // session_start();
            // $_SESSION['logged'] = $_SESSION['logged'] ?? null;
            // if(!$_SESSION['logged'] && strcmp($_SESSION['cargo'], "ADM") == 0){
            //     header("Location: Login.php");
            // }
        ?>

        <h1>Funcionários</h1>
        <a class="custom-btn btn-3" href="CadastrarFuncionario.php"><span>Cadastrar funcionario</span></a>
        <a class="custom-btn btn-3" href="../Codigos/logout.php"><span>Logout</span></a>



    </div>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médico</title>
    <link rel="icon" href="imgs/icone.png">
    <link rel="stylesheet" href="../css/estiloAdm.css">
</head>

<body>
    <?php
        session_start();
        $_SESSION['logged'] = $_SESSION['logged'] ?? null;
        $cargo = (String) $_SESSION['cargo'];
        if(!$_SESSION['logged'] ?? strcmp($cargo, "medico") != 0){
            header("Location: Login.php");
        }
    ?>

    <div class="btnCadFunc">

        <h1>Médico</h1>

        <a class="custom-btn btn-3" href="CadastrarConsultas.php"><span>Cadastrar Consultas</span></a>
        <a class="custom-btn btn-3" href="../Codigos/logout.php"><span>Logout</span></a>

    </div>

</body>

</html>
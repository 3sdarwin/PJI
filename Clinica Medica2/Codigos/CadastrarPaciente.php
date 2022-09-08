<?php

    include_once('../Banco/Banco.php');

    // session_start();
    // $_SESSION['logged'] = $_SESSION['logged'] ?? null;
    // if(!$_SESSION['logged'] ?? $_SESSION['logged'] == null){
    //     header("Location: ../Paginas/Login.php");
    // }

    $paciente = $_POST['txtNome'];
    $cpf = $_POST['txtCpf'];
    $rg = $_POST['txtRg'];
    $sexo = $_POST['txtSexo'];
    $dataNasc = $_POST['txtNascimento'];
    $telefone = $_POST['txtTel'];
    $email = $_POST['txtEmail'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];
    $rua = $_POST['rua'];   
    $numero = $_POST['numero'];
    $opc = $_POST['btnOperacao'];
    
    if(empty($paciente) == true || empty($cpf) == true || empty($rg) == true || empty($sexo) == true || empty($dataNasc) == true || empty($telefone) == true || empty($email) == true || empty($bairro) == true || empty($rua) == true || $numero == 0 ){
        echo("Vazil...");
    }else{

        $sql ="SELECT * FROM paciente WHERE cpf = $cpf;";
        
        $resul = $conn->query($sql);

        if($resul -> num_rows > 0){
            echo("usuário já existente...");
        }else{

            $sql = "INSERT INTO `paciente`(`Nome`, `RG`, `CPF`, `Sexo`, `Data_Nasc`, `Telefone`, `email`, `Cidade`, `Bairro`, `Rua`, `Num`) VALUES ('$paciente','$rg','$cpf','$sexo','$dataNasc','$telefone','$email','$cidade','$bairro','$rua','$numero');";

            $resul = $conn->query($sql);

            if ($resul != 0){
                echo("Usuario cadastrado com sucesso...");
            }else{
                echo("Não foi possivle cadastrar o paciente...");
            }
        }
    }
    

?>
<?php
    include_once('../Banco/Banco.php');

    $paciente = $_POST['txtNomeUsuario'];
    $valor = 100.0;
    $dataHora = $_POST['txtsDate'];
    $datHora = explode("T", $dataHora);
    $data = $datHora[0];
    $hora = $datHora[1];
    $opc = $_POST['btnOperacao'];

    if(empty($paciente) == true || empty($data) == true){
        echo("Vazil...");
    }else{
        
        $sql = "SELECT * FROM paciente WHERE cpf like '$paciente';";
        $result = $conn->query($sql);

        if($result-> num_rows > 0 ){
            echo("paciente existe");
            $sql = "INSERT INTO `consulta`(`IdPaciente`, `Valor`, `data`, `Hora`) VALUES ('$paciente','$valor','$data','$hora');";
            $result = $conn->query($sql);

            if($result != 0){
                echo("A consulta do $paciente Cadastrado com sucesso");
            }else{
                echo("A consulta do $paciente  Não foi Cadastrado com sucesso");
            }

        }else{
            die("Paciente Não encontrado...");
        }
    }
?>
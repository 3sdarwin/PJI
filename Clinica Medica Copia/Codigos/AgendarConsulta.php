<?php
    include_once('../Banco/Banco.php');
    session_start();

    $paciente = $_POST['txtNomeUsuario'];
    $valor = $_POST['txtValorConsulta'];
    $dataHora = $_POST['txtsDate'];
    $datHora = explode("T", $dataHora);
    $data = $datHora[0];
    $hora = $datHora[1];
    $cpf = "";

    $_SESSION['user'] = $_SESSION['user'] ?? null;

    if(empty($paciente) == true || empty($data) == true){
        echo("Vazil...");
    }else{
        
        $sql = "SELECT * FROM paciente WHERE nome like '$paciente';";
        $result = $conn->query($sql);

        if($result-> num_rows > 0 ){
            echo("paciente existe");

            while($row = $result->fetch_assoc()){
                $cpf = $row['CPF'];
            }
            
            $sql = "INSERT INTO `consulta`(`IdPaciente`, `Valor`, `DataCons`, `HoraCons`) VALUES ('$cpf','$valor','$data','$hora');";
            $result = $conn->query($sql);

            date_default_timezone_set('America/Sao_Paulo');
            $HoraSis = date('h:i:s');
            $DataSis = date('Y-m-d');
            $UsuSist = $_SESSION['user'];

            $sql = "INSERT INTO `cadastra`(`IdSecretaria`, `IdConsulta`, `IdPaciente`, `Data`, `Hora`) VALUES ('$UsuSist','$cpf', '$cpf' , '$DataSis','$HoraSis');";
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
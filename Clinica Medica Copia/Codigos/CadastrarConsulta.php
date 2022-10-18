<?php

    include_once('../Banco/Banco.php');

    /*--- DADOS GERAIS ---*/

    $nome = $_POST['txtNome'];
    $cpf = "";
    $diagnostico = $_POST['txtDiagnostico'];
    $data = $_POST['txtNascimento'];

    $quantReceita = $_POST['qtndReceita'];
    $quantExame = $_POST['qtndExame'];

    /*--- DADOS RECEITAS ---*/
    $txtCodRec1 = "";
    $txtDose1 = "";
    $txtMedicamento1 = "";
    $txtTempoTratamento1 = "";

    $txtCodRec2 = "";
    $txtDose2 = "";
    $txtMedicamento2 = "";
    $txtTempoTratamento2 = "";

    $txtCodRec3 = "";
    $txtDose3 = "";
    $txtMedicamento3 = "";
    $txtTempoTratamento3 = "";

    /*--- DADOS EXAMES ---*/
    $txtCodigo1 = "";
    $txtExame1 = "";	
    $txtTipo1 = "";

    $txtCodigo2 = "";
    $txtExame2 = "";	
    $txtTipo2 = "";

    $txtCodigo3 = "";
    $txtExame3 = "";	
    $txtTipo3 = "";


    if($nome == null || $diagnostico == null || $data == null  || $quantReceita == 0 || $quantExame == 0){
        echo "vazil";
    }else{

        $sql = "SELECT * FROM paciente WHERE nome like '$nome';";
        $result = $conn->query($sql);

        if($result-> num_rows > 0 ){
            echo("paciente existe");

            while($row = $result->fetch_assoc()){
                $cpf = $row['CPF'];
            }

            if($quantReceita == 1){
                $txtCodRec1 = $_POST['txtCodRec1'];
                $txtDose1 = $_POST['txtDose1'];
                $txtMedicamento1 = $_POST['txtMedicamento1'];
                $txtTempoTratamento1 = $_POST['txtTempoTratamento1'];

                $sql = "INSERT INTO `receita`(`Numero`, `IdPaciente`, `Medicamento`, `Dose_Diaria`, `Validade`) VALUES ('$txtCodRec1','$cpf','$txtMedicamento1','$txtDose1','$txtTempoTratamento1');";
                $result = $conn->query($sql);

            }elseif($quantReceita == 2){
                $txtCodRec1 = $_POST['txtCodRec1'];
                $txtDose1 = $_POST['txtDose1'];
                $txtMedicamento1 = $_POST['txtMedicamento1'];
                $txtTempoTratamento1 = $_POST['txtTempoTratamento1'];

                $txtCodRec2 = $_POST['txtCodRec2'];
                $txtDose2 = $_POST['txtDose2'];
                $txtMedicamento2 = $_POST['txtMedicamento2'];
                $txtTempoTratamento2 = $_POST['txtTempoTratamento2'];

                $sql = "INSERT INTO `receita`(`Numero`, `IdPaciente`, `Medicamento`, `Dose_Diaria`, `Validade`) VALUES ('$txtCodRec1','$cpf','$txtMedicamento1','$txtDose1','$txtTempoTratamento1');";
                $result = $conn->query($sql);

                $sql = "INSERT INTO `receita`(`Numero`, `IdPaciente`, `Medicamento`, `Dose_Diaria`, `Validade`) VALUES ('$txtCodRec2','$cpf','$txtMedicamento2','$txtDose2','$txtTempoTratamento2');";
                $result = $conn->query($sql);

            }elseif($quantReceita == 3){
                $txtCodRec1 = $_POST['txtCodRec1'];
                $txtDose1 = $_POST['txtDose1'];
                $txtMedicamento1 = $_POST['txtMedicamento1'];
                $txtTempoTratamento1 = $_POST['txtTempoTratamento1'];

                $txtCodRec2 = $_POST['txtCodRec2'];
                $txtDose2 = $_POST['txtDose2'];
                $txtMedicamento2 = $_POST['txtMedicamento2'];
                $txtTempoTratamento2 = $_POST['txtTempoTratamento2'];

                $txtCodRec3 = $_POST['txtCodRec3'];
                $txtDose3 = $_POST['txtDose3'];
                $txtMedicamento3 = $_POST['txtMedicamento3'];
                $txtTempoTratamento3 = $_POST['txtTempoTratamento3'];

                $sql = "INSERT INTO `receita`(`Numero`, `IdPaciente`, `Medicamento`, `Dose_Diaria`, `Validade`) VALUES ('$txtCodRec1','$cpf','$txtMedicamento1','$txtDose1','$txtTempoTratamento1');";
                $result = $conn->query($sql);

                $sql = "INSERT INTO `receita`(`Numero`, `IdPaciente`, `Medicamento`, `Dose_Diaria`, `Validade`) VALUES ('$txtCodRec2','$cpf','$txtMedicamento2','$txtDose2','$txtTempoTratamento2');";
                $result = $conn->query($sql);

                $sql = "INSERT INTO `receita`(`Numero`, `IdPaciente`, `Medicamento`, `Dose_Diaria`, `Validade`) VALUES ('$txtCodRec3','$cpf','$txtMedicamento3','$txtDose3','$txtTempoTratamento3');";
                $result = $conn->query($sql);
            }

            if($quantExame == 1){
                $txtCodigo1 = $_POST['txtCodigo1'];
                $txtExame1 = $_POST['txtExame1'];	
                $txtTipo1 = $_POST['txtTipo1'];

                $sql = "INSERT INTO `exame`(`Codigo`, `IdPaciente`, `Nome`, `Tipo`) VALUES ('$txtCodigo1','$cpf','$txtExame1','$txtTipo1');";
                $result = $conn->query($sql);

            }elseif($quantExame == 2){
                $txtCodigo1 = $_POST['txtCodigo1'];
                $txtExame1 = $_POST['txtExame1'];	
                $txtTipo1 = $_POST['txtTipo1'];

                $txtCodigo2 = $_POST['txtCodigo2'];
                $txtExame2 = $_POST['txtExame2'];    
                $txtTipo2 = $_POST['txtTipo2'];

                $sql = "INSERT INTO `exame`(`Codigo`, `IdPaciente`, `Nome`, `Tipo`) VALUES ('$txtCodigo1','$cpf','$txtExame1','$txtTipo1');";
                $result = $conn->query($sql);

                $sql = "INSERT INTO `exame`(`Codigo`, `IdPaciente`, `Nome`, `Tipo`) VALUES ('$txtCodigo2','$cpf','$txtExame2','$txtTipo2');";
                $result = $conn->query($sql);

            }elseif($quantExame == 3){
                $txtCodigo1 = $_POST['txtCodigo1'];
                $txtExame1 = $_POST['txtExame1'];	
                $txtTipo1 = $_POST['txtTipo1'];

                $txtCodigo2 = $_POST['txtCodigo2'];
                $txtExame2 = $_POST['txtExame2'];    
                $txtTipo2 = $_POST['txtTipo2'];

                $txtCodigo3 = $_POST['txtCodigo3'];
                $txtExame3 = $_POST['txtExame3'];
                $txtTipo3 = $_POST['txtTipo3'];

                $sql = "INSERT INTO `exame`(`Codigo`, `IdPaciente`, `Nome`, `Tipo`) VALUES ('$txtCodigo1','$cpf','$txtExame1','$txtTipo1');";
                $result = $conn->query($sql);

                $sql = "INSERT INTO `exame`(`Codigo`, `IdPaciente`, `Nome`, `Tipo`) VALUES ('$txtCodigo2','$cpf','$txtExame2','$txtTipo2');";
                $result = $conn->query($sql);

                $sql = "INSERT INTO `exame`(`Codigo`, `IdPaciente`, `Nome`, `Tipo`) VALUES ('$txtCodigo3','$cpf','$txtExame3','$txtTipo3');";
                $result = $conn->query($sql);

            }
        }else{
            echo"Paciente Não Existe";
        }
        
    
    }
?>
<?php

    include_once("../Banco/Banco.php");

    session_start();

    $_SESSION['logged'] = $_SESSION['logged'] ?? null;
    if(!$_SESSION['logged'] ?? $_SESSION['logged'] = null){
        header("Location: ../Paginas/Login.php");
    }

    $username = $_POST['txtNomeUsuario'];
    $cpf = $_POST['txtCpf'];
    $rg = $_POST['txtRg'];
    $dataNasc = $_POST['txtNascimento'];
    $sexo = $_POST['txtSexo'];
    $salario = $_POST['txtSalario'];
    $telefone = $_POST['txtTel'];
    $cep = $_POST['txtCep'];
    $rua = $_POST['txtRua'];
    $numero = $_POST['txtNumero'];
    $bairro = $_POST['txtBairro'];
    $cidade = $_POST['txtCidade'];
    $tipoFunc= 0;
    $tipoFunc = (int) $_POST['exampleRadios'];
    $id = 0;


    if($username == null || $cep == null || $rg == null || $dataNasc == null || $sexo == null || $salario == null || $telefone == null || $cep == null || $rua == null || $numero == null || $rua == null || $numero == null || $bairro == null || $cidade == null || $tipoFunc == 0){
        echo("Vazil...");
    }else{

        $sql = "SELECT * FROM Funcionario WHERE cpf = $cpf ;";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            echo("Usuario já existente...");            
        }else{

            if($tipoFunc == 1){
                $sql = "INSERT INTO `funcionario`(`Nome`, `CPF`, `RG`, `Sexo`, `Data_Nasc`, `ADM`, `Telefone`, `Salario`, `Cidade`, `Rua`, `Num`, `Bairro`) VALUES ('$username', '$cpf', '$rg', '$sexo', '$dataNasc', 1 ,'$telefone', '$salario', '$cidade', '$rua', '$numero', '$bairro');";
                $result = $conn->query($sql);
                
                if($result != 0){
                    $user = explode(" ", $username);
                    $nomeUsuario = $user[0];
                    $senha = rand(1000,9999);

                    $sql = "SELECT * FROM Funcionario WHERE cpf = $cpf ;";
                    $result = $conn->query($sql);

                    if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
                            $id = (int) $row['Numero'];
                        }
                    }

                    $sql = "INSERT INTO login VALUES('$id', '$nomeUsuario', '$senha');";
                    $result = $conn->query($sql);

                    if($result!= 0){
                        echo("Ok");
                        echo("Usuario: " . $nomeUsuario);
                        echo("Senha: " . $senha);
                    }

                }
            }elseif($tipoFunc == 2){
                $sql = "INSERT INTO `funcionario`(`Nome`, `CPF`, `RG`, `Sexo`, `Data_Nasc`, `ADM`, `Telefone`, `Salario`, `Cidade`, `Rua`, `Num`, `Bairro`) VALUES ('$username', '$cpf', '$rg', '$sexo', '$dataNasc', 0 ,'$telefone', '$salario', '$cidade', '$rua', '$numero', '$bairro');";
                $result = $conn->query($sql);

                if($result != 0){
                    $id = 0; 
                    $user = explode(" ", $username);
                    $nomeUsuario = $user[0];
                    $senha = rand(1000,9999);

                    $sql = "SELECT * FROM Funcionario WHERE cpf = $cpf ;";
                    $result = $conn->query($sql);

                    if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
                            $id = (int) $row['Numero'];
                        }
                    }

                    $sql = "INSERT INTO login VALUES('$id', '$nomeUsuario', '$senha');";

                    $result = $conn->query($sql);

                    if($result!= 0){
                        echo("Ok");
                        echo("Usuario: " . $nomeUsuario);
                        echo("Senha: " . $senha);
                    }

                    $sql = "INSERT INTO Secretaria(numfunc, ctps) VALUES ('$id', null);";
                    $conn->query($sql);

                }
            }elseif($tipoFunc == 3){
                $sql = "INSERT INTO `funcionario`(`Nome`, `CPF`, `RG`, `Sexo`, `Data_Nasc`, `ADM`, `Telefone`, `Salario`, `Cidade`, `Rua`, `Num`, `Bairro`) VALUES ('$username', '$cpf', '$rg', '$sexo', '$dataNasc', 0 ,'$telefone', '$salario', '$cidade', '$rua', '$numero', '$bairro');";
                $result = $conn->query($sql);
                
                if($result != 0){    
                    $id = 0; 
                    $user = explode(" ", $username);
                    $nomeUsuario = $user[0];
                    $senha = rand(1000,9999);

                    $sql = "SELECT * FROM Funcionario WHERE cpf = $cpf ;";
                    $result = $conn->query($sql);

                    if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
                            $id = (int) $row['Numero'];
                        }
                    }

                    $sql = "INSERT INTO login VALUES('$id', '$nomeUsuario', '$senha');";

                    $result = $conn->query($sql);

                    if($result!= 0){
                        echo("Ok");
                        echo("Usuario: " . $nomeUsuario);
                        echo("Senha: " . $senha);
                    }

                    $sql = "INSERT INTO Medico(numfunc, crm, instFormacao, conclusao) VALUES ('$id', null, null, null, null);";
                    $conn->query($sql);

                }
            }
        }
    }
?>  
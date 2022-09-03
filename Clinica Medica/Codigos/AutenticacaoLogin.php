<?php
    include_once('../Banco/Banco.php');
    session_start();

    $username = $_POST['txtLogin'];
    $senha = $_POST['txtSenha'];
    $id = 0;
    $ADM = 0;

    if(empty($username) || empty($senha)){
        echo('Vazil');
    }else{
        
        $sql = "SELECT * FROM login WHERE username LIKE '$username' AND senha LIKE '$senha'"; //fazendo a consulta no BD

        $result = $conn->query($sql); //Execultando a consulta no BD 

        if ($result->num_rows > 0){ //Vendo se OBTEVE resultado

            while ($row = $result->fetch_assoc()) {
                $id = $row['NumFunc'];
            }

            //é Medico?

            $sql = "SELECT * FROM Medico WHERE NumFunc = ".$id.";";

            $result = $conn->query($sql); //Execultando a consulta no BD

            if($result->num_rows > 0){
                $_SESSION['logged'] = true;
                $_SESSION['cargo'] = "Medico";
                header("Location: ../Paginas/Medic.php");
            }else{

                //é Secretaria?

                $sql = "SELECT * FROM Secretaria WHERE NumFunc = ".$id.";";

                $result = $conn->query($sql); //Execultando a consulta no BD

                if($result->num_rows > 0){
                    $$_SESSION['logged'] = true;
                    $_SESSION['cargo'] = "Secretaria";
                    header("Location: ../Paginas/Secretaria.php");
                }else{
                    
                    //é ADM?

                    $sql = "SELECT * FROM Funcionario WHERE Numero = $id;";

                    $result = $conn->query($sql); //Execultando a consulta no BD

                    if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
                            $ADM = $row['ADM'];
                        }
                        
                        if($ADM == 1){
                            $_SESSION['logged'] = true;
                            $_SESSION['cargo'] = "ADM";
                            header("Location: ../Paginas/Adm.php");
                        }
                    }
                }
            }
        }else{ //Se Não OBTEVE resultado
            echo("Usuario inesistente");
        }
    }




?>
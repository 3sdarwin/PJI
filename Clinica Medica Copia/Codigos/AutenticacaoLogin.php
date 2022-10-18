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
        
        $sql = "SELECT * FROM loguin WHERE username LIKE '$username' AND senha LIKE '$senha'"; //fazendo a consulta no BD

        $result = $conn->query($sql); //Execultando a consulta no BD 

        if ($result->num_rows > 0){ //Vendo se OBTEVE resultado

            while ($row = $result->fetch_assoc()) {
                $id = $row['IdFunc'];
            }

            //é Medico?

            $sql = "SELECT * FROM Medico WHERE idFunc = ".$id.";";

            $result = $conn->query($sql); //Execultando a consulta no BD

            if($result->num_rows > 0){
                $_SESSION['logged'] = true;
                $_SESSION['cargo'] = "Medico";
                $_SESSION['user'] = $id;
                header("Location: ../Paginas/Medic.php");
            }else{

                //é Secretaria?

                $sql = "SELECT * FROM Secretaria WHERE idFunc = ".$id.";";

                $result = $conn->query($sql); //Execultando a consulta no BD

                if($result->num_rows > 0){
                    $_SESSION['logged'] = true;
                    $_SESSION['cargo'] = "Secretaria";
                    $_SESSION['user'] = $id;

                    // echo "Logged: " . $_SESSION['logged'];
                    // echo "Cargo: ". $_SESSION['cargo'];
                    // echo "User: ". $_SESSION['user'];
                    
                    header("Location: ../Paginas/Secretaria.php");
                }else{
                    
                    //é ADM?

                    $sql = "SELECT * FROM Funcionario WHERE id = $id;";

                    $result = $conn->query($sql); //Execultando a consulta no BD

                    if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
                            $ADM = $row['ADM'];
                        }
                        
                        if($ADM == 1){
                            $_SESSION['logged'] = true;
                            $_SESSION['cargo'] = "ADM";
                            $_SESSION['user'] = $id;
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
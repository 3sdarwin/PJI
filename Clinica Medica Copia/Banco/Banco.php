<?php
    $severname = "localhost";
    $username = "root";
    $database = "clinica2";
    $senha = "";   
    
    $conn = mysqli_connect($severname, $username, $senha ,$database);
    
    if (!$conn){
        die("A conexão Falhou :) ".mysqli_connect_error());
        return;
    }
    // else{
    //     die("Deu certo");
    // }
?>
<?php

    date_default_timezone_set('America/Sao_Paulo');

    $_SESSION['user'] = $_SESSION['user'] ?? null;
    $_SESSION['cargo'] = $_SESSION['cargo']?? null;

    
    if ($_SESSION['user'] === null) {
        $_SESSION['user'] = 'Unknown';
    }
    
    echo $_SESSION['user'];
    echo $_SESSION['cargo'];

    echo "oi";
?>
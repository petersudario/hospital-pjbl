<?php
    $servername = "127.0.0.1";
    $username = "root"; // PUC => root
    $password = "A992176566kemi_";
    $dbname = "hospital";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Conexão falhou: ${$conn->connect_error}");
    }
    
    echo "Connection established."
    
?>
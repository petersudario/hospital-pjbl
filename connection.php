<?php
        $servername = "localhost";
        $username = "root"; // PUC => root
        $password = "A992176566kemi_";
        $dbname = "hospital";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
                die("Conexão falhou: ${$conn->connect_error}");
        }
                
?>

<script src="https://cdn.tailwindcss.com"></script>


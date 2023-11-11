<html>
    <head>
        <title>Banco de Dados</title>
        <style>
            table {
                width: 100%;
                border: 1px solid #000;
            }
            table td, th {
                border: 1px solid #000;
                text-align: center;
            }
        </style>
    </head>
    <body>
<?php
    include("connection.php");

    $sql = "SELECT id, username FROM login";
    $result = $conn->query($sql);
?>
    
    </body>
</html>
<?php
include("./connection.php");

$sql = "SELECT ID_Enfermeiro, Nome_Enfermeiro, CIP FROM enfermeiro";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Página de Login</h1>
        <form name="form1" method="post" action="login_php.php">
            <table align="center">
                <tr>
                    <td style="text-align: right; width: 50px;">Login:</td>
                    <td>
                        <input type="text" name="txtLogin">
                    </td>
                </tr>
                <tr>
                    <td style="text-align: right; width: 50px;">Senha:</td>
                    <td>
                        <input type="password" name="txtPassword">
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>
                        <input type="submit" value="Enviar">
                    </td>
                </tr>
            </table>
        </form>
    
</body>

</html>
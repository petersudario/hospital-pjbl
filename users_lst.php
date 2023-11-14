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

    $sql = "SELECT * FROM Medico";
    
    $result = $conn->query($sql);
?>
        <h1>Médicos:</h1>
        <table>
            <th>ID</th>
            <th>Nome</th>
            <th>CRM</th>
            <th>CPF</th>
            <th>Data Nascimento</th>
            <th>Gênero</th>
            <th>RG</th>
            <th>Telefone</th>
            <th>E-mail</th>
            <th>Endereço</th>
<?php 
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
?>
            <tr>
                <td>
                    <a href="users_user.php?ID_Medico=<?php echo $row['ID_Medico'] ?>">
                        <?php echo $row["ID_Medico"] ?>
                    </a>
                </td>
                <td><?php echo $row["Nome_Medico"] ?></td>
                <td><?php echo $row["CRM"] ?></td>
                <td><?php echo $row["CPF_Medico"] ?></td>
                <td><?php echo $row["Data_Nascimento_Medico"] ?></td>
                <td><?php echo $row["Genero_Medico"] ?></td>
                <td><?php echo $row["RG_Medico"] ?></td>
                <td><?php echo $row["Telefone_Medico"] ?></td>
                <td><?php echo $row["E_mail_Medico"] ?></td>
                <td><?php echo $row['Logradouro_Medico'].$row['Nome_Endereco_Medico'].$row['Numero_Endereco_Medico'].$row['Complemento_Endereco_Medico'] ?></td>

            </tr>
<?php
        }
        }
?>  

        </table>

        <h1>Pacientes:</h1>
        <table>
        <th>ID</th>
            <th>Nome</th>
            <th>Condição</th>
            <th>CPF</th>
            <th>Data Nascimento</th>
            <th>Gênero</th>
            <th>RG</th>
            <th>Telefone</th>
            <th>E-mail</th>
            <th>Endereço</th>
        </table>

        <h1>Enfermeiros:</h1>
        <table>
            <th>ID</th>
            <th>Nome</th>
            <th>CIP</th>
            <th>CPF</th>
            <th>Data Nascimento</th>
            <th>Gênero</th>
            <th>RG</th>
            <th>Telefone</th>
            <th>E-mail</th>
            <th>Endereço</th>

        </table>

        <h1>Salas de cirurgia:</h1>
        <table>
            <th>ID</th>
            <th>Bloco</th>
            <th>Número</th>
            <th>Tipo</th>
        </table>
    
    </body>
</html>
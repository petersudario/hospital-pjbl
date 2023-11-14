<html>
    <head>
        <title>Dados do usuário</title>
    </head>
    <body>
        <?php
            include("connection.php");

            $id = $_GET["ID_Medico"];
            $sql = "SELECT * FROM Medico WHERE ID_Medico = $id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "id: $id<br>";
                    echo "Nome: {$row['Nome_Medico']}<br>";
                    echo "CRM: {$row['CRM']}<br>";
                    echo "CPF: {$row['CPF_Medico']}<br>";
                    echo "Nome: {$row['Data_Nascimento_Medico']}<br>";
                    echo "Nome: {$row['Genero_Medico']}<br>";
                    echo "Nome: {$row['Telefone_Medico']}<br>";
                    echo "Nome: {$row['E_mail_Medico']}<br>";
                    echo "Nome: {$row['RG_Medico']}<br>";
                    echo "Nome: ". $row['Logradouro_Medico'].$row['Nome_Endereco_Medico'].$row['Numero_Endereco_Medico'].$row['Complemento_Endereco_Medico'];

                }
            }
        ?>
    </body>
</html>
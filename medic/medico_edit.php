<html>
    <head>
        <title>Edição de Medico</title>
    </head>
    <body>
        <?php
            include("../connection.php");

            session_start();
            if (!isset($_SESSION["id"])) {
                header("Location: index.php");
            }

            $id = $_GET["ID_Medico"];
            $sql = "SELECT * FROM Medico WHERE ID_Medico = $id";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "id: $id<br>";
                    echo "Nome: {$row['Nome_Medico']}<br>";
                    echo "CRM: {$row['CRM']}<br>";
                    echo "CPF: {$row['CPF_Medico']}<br>";
                    echo "Data de nascimento: {$row['Data_Nascimento_Medico']}<br>";
                    echo "Gênero: {$row['Genero_Medico']}<br>";
                    echo "Telefone: {$row['Telefone_Medico']}<br>";
                    echo "E-mail: {$row['E_mail_Medico']}<br>";
                    echo "RG: {$row['RG_Medico']}<br>";
                    echo "Endereço: ". $row['Logradouro_Medico']." ".$row['Nome_Endereco_Medico']." ".$row['Numero_Endereco_Medico']." ".$row['Complemento_Endereco_Medico'];
                }
            }
        ?>
        <h1>Editar Usuário</h1>
        <form name="form1" id="form1" method="post" action="./medico_edit_php.php">
            Nome:<br>
            <input type="text" name="txtNome" value="<?php ?>"><br>
            CRM:<br>
            <input type="text" name="txtCrm" value="<?php ?>"><br><br>
            <input type="hidden" name="hidId" value="<?php echo $id ?>">
            CPF:<br>
            <input type="text" name="txtCpf" value="<?php ?>"><br>
            Data de Nascimento:<br>
            <input type="date" name="dtNascimento" value="<?php ?>"><br>
            Genero:<br>
            <input type="text" name="txtGenero" value="<?php ?>"><br>
            Telefone:<br>
            <input type="tel" name="telTelefone" value="<?php ?>"><br>
            email:<br>
            <input type="text" name="email" value="<?php ?>"><br>
            RG:<br>
            <input type="text" name="txtRg" value="<?php ?>"><br>
            logradouro:<br>
            <input type="text" name="txtLogradouro" value="<?php  ?>"><br>
            Nome Endereço:<br>
            <input type="text" name="txtNomeEndereco" value="<?php ?>"><br>
            Número Endereço:<br>
            <input type="text" name="txtNumeroEndereco" value="<?php ?>"><br>
            Complemento Endereço:<br>
            <input type="text" name="txtComplementoEndereco" value="<?php ?>"><br>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>
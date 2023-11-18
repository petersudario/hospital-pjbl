<html>
    <head>
        <title>Edição de usuário</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <?php
        include("../connection.php");
        include("../components/nav.php");
        ?>
    </head>
    <body>
        <div class="flex justify-center">
            <div>
                <h1 class="text-2xl font-bold mb-4">Editar Paciente</h1>
            </div>
        </div>
        
    <?php
        $sql = "SELECT * FROM Paciente";
        
        $result = $conn->query($sql);
    

        $id = $_GET["ID_Paciente"];
        $sql = "SELECT * FROM Paciente WHERE ID_Paciente = $id";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            echo '<div class="flex justify-center">';
            echo '<div class="max-w-md">';
            while($row = $result->fetch_assoc()) {
                echo '<div class="bg-white shadow-md rounded p-4 mb-4">';
                echo "id: $id<br>";
                echo "Nome: {$row['Nome_Paciente']}<br>";
                echo "Condicao: {$row['Condicao_Paciente']}<br>";
                echo "CPF: {$row['CPF_Paciente']}<br>";
                echo "Data de nascimento: {$row['Data_Nascimento_Paciente']}<br>";
                echo "Gênero: {$row['Genero_Paciente']}<br>";
                echo "Telefone: {$row['Telefone_Emergencia_Paciente']}<br>";
                echo "E-mail: {$row['E_mail_Paciente']}<br>";
                echo "RG: {$row['RG_Paciente']}<br>";
                echo "Endereço: ". $row['Logradouro_Paciente']." ".$row['Nome_Endereco_Paciente']." ".$row['Numero_Endereco_Paciente']." ".$row['Complemento_Endereco_Paciente'];
                echo '</div>';
            }
            echo '</div>';
            echo '</div>';
        }

    ?>
    <div class="grid justify-center">
    <form name="form1" id="form1" method="post" action="./paciente_edit_php.php" class="max-w-md mx-auto">
        <div class="mb-4">
            <label for="txtNome" class="block mb-2">Nome:</label>
            <input type="text" name="txtNome" id="txtNome" value="<?php ?>" class="w-full px-4 py-2 border rounded">
        </div>
        <div class="mb-4">
            <label for="txtCondicao" class="block mb-2">Condicao:</label>
            <input type="text" name="txtCondicao" id="txtCondicao" value="<?php ?>" class="w-full px-4 py-2 border rounded">
        </div>
        <input type="hidden" name="hidId" value="<?php echo $id ?>">
        <div class="mb-4">
            <label for="txtCpf" class="block mb-2">CPF:</label>
            <input type="text" name="txtCpf" id="txtCpf" value="<?php ?>" class="w-full px-4 py-2 border rounded">
        </div>
        <div class="mb-4">
            <label for="dtNascimento" class="block mb-2">Data de Nascimento:</label>
            <input type="date" name="dtNascimento" id="dtNascimento" value="<?php ?>" class="w-full px-4 py-2 border rounded">
        </div>
        <div class="mb-4">
            <label for="txtGenero" class="block mb-2">Gênero:</label>
            <input type="text" name="txtGenero" id="txtGenero" value="<?php ?>" class="w-full px-4 py-2 border rounded">
        </div>
        <div class="mb-4">
            <label for="telTelefone" class="block mb-2">Telefone de Emergência</label>
            <input type="tel" name="telTelefone" id="telTelefone" value="<?php ?>" class="w-full px-4 py-2 border rounded">
        </div>
        <div class="mb-4">
            <label for="email" class="block mb-2">E-mail:</label>
            <input type="text" name="email" id="email" value="<?php ?>" class="w-full px-4 py-2 border rounded">
        </div>
        <div class="mb-4">
            <label for="txtRg" class="block mb-2">RG:</label>
            <input type="text" name="txtRg" id="txtRg" value="<?php ?>" class="w-full px-4 py-2 border rounded">
        </div>
        <div class="mb-4">
            <label for="txtLogradouro" class="block mb-2">Logradouro:</label>
            <input type="text" name="txtLogradouro" id="txtLogradouro" value="<?php ?>" class="w-full px-4 py-2 border rounded">
        </div>
        <div class="mb-4">
            <label for="txtNomeEndereco" class="block mb-2">Nome Endereço:</label>
            <input type="text" name="txtNomeEndereco" id="txtNomeEndereco" value="<?php ?>" class="w-full px-4 py-2 border rounded">
        </div>
        <div class="mb-4">
            <label for="txtNumeroEndereco" class="block mb-2">Número Endereço:</label>
            <input type="text" name="txtNumeroEndereco" id="txtNumeroEndereco" value="<?php ?>" class="w-full px-4 py-2 border rounded">
        </div>
        <div class="mb-4">
            <label for="txtComplementoEndereco" class="block mb-2">Complemento Endereço:</label>
            <input type="text" name="txtComplementoEndereco" id="txtComplementoEndereco" value="<?php ?>" class="w-full px-4 py-2 border rounded">
        </div>
        <input type="submit" value="Enviar" class="px-4 py-2 bg-blue-500 text-white rounded">
    </div>
    </form>
    </body>
    <?php
        include("../components/footer.php");
    ?>
</html>
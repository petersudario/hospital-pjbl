<html>
    <head>
        <title>Cadastro de usuário</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body>
        
    <?php
        include("../connection.php");
        include("../components/nav.php");

        $sql = "SELECT * FROM Enfermeiro";
        
        $result = $conn->query($sql);
    ?>

        <h1 class="text-2xl font-bold mb-4">Cadastrar Usuário</h1>
        <form name="form1" id="form1" method="post" action="./enfermeiro_create_php.php" class="max-w-md mx-auto">
            <div class="mb-4">
                <label for="txtNome" class="block">Nome:</label>
                <input type="text" name="txtNome" id="txtNome" value="<?php ?>" class="w-full px-4 py-2 border border-gray-300 rounded-md">
            </div>
            <div class="mb-4">
                <label for="txtCip" class="block">CIP:</label>
                <input type="text" name="txtCip" id="txtCip" value="<?php ?>" class="w-full px-4 py-2 border border-gray-300 rounded-md">
            </div>
            <div class="mb-4">
                <label for="txtCpf" class="block">CPF:</label>
                <input type="text" name="txtCpf" id="txtCpf" value="<?php ?>" class="w-full px-4 py-2 border border-gray-300 rounded-md">
            </div>
            <div class="mb-4">
                <label for="dtNascimento" class="block">Data de Nascimento:</label>
                <input type="date" name="dtNascimento" id="dtNascimento" value="<?php ?>" class="w-full px-4 py-2 border border-gray-300 rounded-md">
            </div>
            <div class="mb-4">
                <label for="txtGenero" class="block">Genero:</label>
                <input type="text" name="txtGenero" id="txtGenero" value="<?php ?>" class="w-full px-4 py-2 border border-gray-300 rounded-md">
            </div>
            <div class="mb-4">
                <label for="telTelefone" class="block">Telefone:</label>
                <input type="tel" name="telTelefone" id="telTelefone" value="<?php ?>" class="w-full px-4 py-2 border border-gray-300 rounded-md">
            </div>
            <div class="mb-4">
                <label for="email" class="block">Email:</label>
                <input type="text" name="email" id="email" value="<?php ?>" class="w-full px-4 py-2 border border-gray-300 rounded-md">
            </div>
            <div class="mb-4">
                <label for="txtRg" class="block">RG:</label>
                <input type="text" name="txtRg" id="txtRg" value="<?php ?>" class="w-full px-4 py-2 border border-gray-300 rounded-md">
            </div>
            <div class="mb-4">
                <label for="txtLogradouro" class="block">Logradouro:</label>
                <input type="text" name="txtLogradouro" id="txtLogradouro" value="<?php ?>" class="w-full px-4 py-2 border border-gray-300 rounded-md">
            </div>
            <div class="mb-4">
                <label for="txtNomeEndereco" class="block">Nome Endereço:</label>
                <input type="text" name="txtNomeEndereco" id="txtNomeEndereco" value="<?php ?>" class="w-full px-4 py-2 border border-gray-300 rounded-md">
            </div>
            <div class="mb-4">
                <label for="txtNumeroEndereco" class="block">Número Endereço:</label>
                <input type="text" name="txtNumeroEndereco" id="txtNumeroEndereco" value="<?php ?>" class="w-full px-4 py-2 border border-gray-300 rounded-md">
            </div>
            <div class="mb-4">
                <label for="txtComplementoEndereco" class="block">Complemento Endereço:</label>
                <input type="text" name="txtComplementoEndereco" id="txtComplementoEndereco" value="<?php ?>" class="w-full px-4 py-2 border border-gray-300 rounded-md">
            </div>
            <input type="submit" value="Enviar" class="w-full px-4 py-2 bg-green-500 text-white rounded-md">
        </form>
    </body>
</html>
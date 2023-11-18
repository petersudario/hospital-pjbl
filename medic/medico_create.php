<html>
    <head>
        <title>Cadastro de usuário</title>
    </head>
    <body>
        <h1>Cadastrar Usuário</h1>
        <form name="form1" id="form1" method="post" action="./medico_create_php.php">
            Nome:<br>
            <input type="text" name="txtNome" value="<?php ?>"><br>
            CRM:<br>
            <input type="text" name="txtCrm" value="<?php ?>"><br><br>
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
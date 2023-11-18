<html>
    <head>
        <title>Dados do usuário</title>
    </head>
    <body>
        <?php
            include("../connection.php");

            $nome = $_POST["txtNome"];
            $crm = $_POST["txtCrm"];
            $cpf = $_POST["txtCpf"];
            $dataNascimento = $_POST["dtNascimento"];
            $genero = $_POST["txtGenero"];
            $telefone = $_POST["telTelefone"];
            $email = $_POST["email"];
            $rg = $_POST["txtRg"];
            $logradouro = $_POST["txtLogradouro"];
            $nomeEndereco = $_POST["txtNomeEndereco"];
            $numeroEndereco = $_POST["txtNumeroEndereco"];
            $complementoEndereco = $_POST["txtComplementoEndereco"];
            
            $sql = "INSERT INTO medico(Nome_Medico, CRM, CPF_Medico, Data_Nascimento_Medico, Genero_Medico, Telefone_Medico,
             Numero_Endereco_Medico, Complemento_Endereco_Medico, Nome_Endereco_Medico, Logradouro_Medico, E_mail_Medico, RG_Medico ) 
             VALUES('$nome', '$crm','$cpf', '$dataNascimento', '$genero', '$telefone', '$numeroEndereco', '$complementoEndereco', '$nomeEndereco', '$logradouro', '$email', '$rg')";
            $result = $conn->query($sql);

            if($result === TRUE) {
?>
<script>
    alert('Usuário cadastrado com sucesso!!!');
    location.href = 'medico_view.php';
</script>
<?php
            }
            else {
?>
<script>
    alert('Algo não deu certo...');
    history.go(-1);
</script>
<?php
            }
?>
    </body>
</html>
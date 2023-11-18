<html>
    <head>
        <title>Dados do usuário</title>
    </head>
    <body>
        <?php
            include("../connection.php");

            $nome = $_POST["txtNome"];
            $cip = $_POST["txtCip"];
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
            
            $sql = "INSERT INTO enfermeiro(Nome_Enfermeiro, CIP, CPF_Enfermeiro, Data_Nascimento_Enfermeiro, Genero_Enfermeiro, Telefone_Enfermeiro,
             Numero_Endereco_Enfermeiro, Complemento_Endereco_Enfermeiro, Nome_Endereco_Enfermeiro, Logradouro_Enfermeiro, E_mail_Enfermeiro, RG_Enfermeiro ) 
             VALUES('$nome', '$cip','$cpf', '$dataNascimento', '$genero', '$telefone', '$numeroEndereco', '$complementoEndereco', '$nomeEndereco', '$logradouro', '$email', '$rg')";
            $result = $conn->query($sql);

            if($result === TRUE) {
?>
<script>
    alert('Usuário cadastrado com sucesso!!!');
    location.href = 'enfermeiro_view.php';
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
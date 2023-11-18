<html>
    <head>
        <title>Dados do usuário</title>
    </head>
    <body>
        <?php
            include("../connection.php");

            $nome = $_POST["txtNome"];
            $condicao = $_POST["txtCondicao"];
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
            
            $sql = "INSERT INTO paciente(Nome_Paciente, Condicao_Paciente, CPF_Paciente, Data_Nascimento_Paciente, Genero_Paciente, Telefone_Paciente,
             Numero_Endereco_Paciente, Complemento_Endereco_Paciente, Nome_Endereco_Paciente, Logradouro_Paciente, E_mail_Paciente, RG_Paciente ) 
             VALUES('$nome', '$condicao','$cpf', '$dataNascimento', '$genero', '$telefone', '$numeroEndereco', '$complementoEndereco', '$nomeEndereco', '$logradouro', '$email', '$rg')";
            $result = $conn->query($sql);

            if($result === TRUE) {
?>
<script>
    alert('Usuário cadastrado com sucesso!!!');
    location.href = 'paciente_view.php';
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
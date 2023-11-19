
    <head>
        <title>Dados do usuário</title>
    </head>
 
        <?php
            include("../connection.php");

            $nome = $_GET["txtNome"];
            $condicao = $_GET["txtCondicao"];
            $cpf = $_GET["txtCpf"];
            $dataNascimento = $_GET["dtNascimento"];
            $genero = $_GET["txtGenero"];
            $telefone = $_GET["telTelefone"];
            $email = $_GET["email"];
            $rg = $_GET["txtRg"];
            $logradouro = $_GET["txtLogradouro"];
            $nomeEndereco = $_GET["txtNomeEndereco"];
            $numeroEndereco = $_GET["txtNumeroEndereco"];
            $complementoEndereco = $_GET["txtComplementoEndereco"];
            
            $sql = "INSERT INTO paciente(Nome_Paciente, Condicao_Paciente, CPF_Paciente, Data_Nascimento_Paciente, Genero_Paciente, Telefone_Emergencia_Paciente,
             Numero_Endereco_Paciente, Complemento_Endereco_Paciente, Nome_Endereco_Paciente, Logradouro_Paciente, E_mail_Paciente, RG_Paciente ) 
             VALUES('$nome', '$condicao','$cpf', '$dataNascimento', '$genero', '$telefone', '$numeroEndereco', '$complementoEndereco', '$nomeEndereco', '$logradouro', '$email', '$rg')";
            $result = $conn->query($sql);

            if($result === TRUE) {
?>
<script>
    alert('Usuário cadastrado com sucesso!!!');
    location.href = <?= header("Location: paciente_view.php") ?>;
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

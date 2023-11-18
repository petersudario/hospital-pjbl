<html>
    <head>
        <title>Dados do usuário</title>
    </head>
    <body>
        <?php
            include("../connection.php");


            $id = $_POST["hidId"];
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

            $sql = "UPDATE paciente SET 
                        Nome_Paciente = '$nome',
                        Condicao_Paciente = '$condicao',
                        CPF_Paciente = '$cpf',
                        Data_Nascimento_Paciente = '$dataNascimento',
                        Genero_Paciente = '$genero',
                        Telefone_Paciente = '$telefone',
                        Numero_Endereco_Paciente = '$numeroEndereco',
                        Complemento_Endereco_Paciente = '$complementoEndereco',
                        Nome_Endereco_Paciente = '$nomeEndereco',
                        Logradouro_Paciente = '$logradouro',
                        E_mail_Paciente = '$email',
                        RG_Paciente = '$rg' 
                    WHERE ID_Paciente=$id";
        
            $result = $conn->query($sql);

            if ($result === TRUE) {
?>
<script>
    alert('Usuário editado com sucesso!!!');
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
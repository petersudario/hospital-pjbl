<html>
    <head>
        <title>Dados do usuário</title>
    </head>
    <body>
        <?php
            include("../connection.php");

            $id = $_GET["hidId"];
            $nome = $_GET["txtNome"];
            $crm = $_GET["txtCrm"];
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

            $sql = "UPDATE medico SET 
                        Nome_Medico = '$nome',
                        CRM = '$crm',
                        CPF_Medico = '$cpf',
                        Data_Nascimento_Medico = '$dataNascimento',
                        Genero_Medico = '$genero',
                        Telefone_Medico = '$telefone',
                        Numero_Endereco_Medico = '$numeroEndereco',
                        Complemento_Endereco_Medico = '$complementoEndereco',
                        Nome_Endereco_Medico = '$nomeEndereco',
                        Logradouro_Medico = '$logradouro',
                        E_mail_Medico = '$email',
                        RG_Medico = '$rg' 
                    WHERE ID_Medico=$id";
        
            $result = $conn->query($sql);

            if ($result === TRUE) {
?>
<script>
    alert('Usuário editado com sucesso!!!');
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
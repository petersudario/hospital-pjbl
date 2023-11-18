<html>
    <head>
        <title>Dados do usuário</title>
    </head>
    <body>
        <?php
            include("../connection.php");

            session_start();
            if (!isset($_SESSION["id"])) {
                header("Location: index.php");
            }

            $id = $_POST["hidId"];
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
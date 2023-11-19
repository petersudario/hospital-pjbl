
        <?php
            include("../connection.php");

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
            
            $sql = "INSERT INTO medico(Nome_Medico, CRM, CPF_Medico, Data_Nascimento_Medico, Genero_Medico, Telefone_Medico,
             Numero_Endereco_Medico, Complemento_Endereco_Medico, Nome_Endereco_Medico, Logradouro_Medico, E_mail_Medico, RG_Medico ) 
             VALUES('$nome', '$crm','$cpf', '$dataNascimento', '$genero', '$telefone', '$numeroEndereco', '$complementoEndereco', '$nomeEndereco', '$logradouro', '$email', '$rg')";
            $result = $conn->query($sql);

            if($result === TRUE) {
?>
<script>
    alert('Médico cadastrado com sucesso!!!');
    location.href = <?= header("Location: medico_view.php") ?>;
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
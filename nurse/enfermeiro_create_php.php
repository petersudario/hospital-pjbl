<?php
include("../connection.php");

$nome = $_GET["txtNome"];
$cip = $_GET["txtCip"];
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

$sql = "INSERT INTO enfermeiro(Nome_Enfermeiro, CIP, CPF_Enfermeiro, Data_Nascimento_Enfermeiro, Genero_Enfermeiro, Telefone_Enfermeiro,
             Numero_Endereco_Enfermeiro, Complemento_Endereco_Enfermeiro, Nome_Endereco_Enfermeiro, Logradouro_Enfermeiro, E_mail_Enfermeiro, RG_Enfermeiro ) 
             VALUES('$nome', '$cip','$cpf', '$dataNascimento', '$genero', '$telefone', '$numeroEndereco', '$complementoEndereco', '$nomeEndereco', '$logradouro', '$email', '$rg')";
$result = $conn->query($sql);

if ($result === TRUE) {
    ?>
    <script>
        alert('Usuário cadastrado com sucesso!!!');
        location.href = <?= header("Location: enfermeiro_view.php") ?>;

    </script>
    <?php
} else {
    ?>
    <script>
        alert('Algo não deu certo...');
        history.go(-1);
    </script>
    <?php
}
?>
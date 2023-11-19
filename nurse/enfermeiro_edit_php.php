<?php
include("../connection.php");

$id = $_GET["hidId"];
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

$sql = "UPDATE Enfermeiro SET 
                        Nome_Enfermeiro = '$nome',
                        Cip = '$cip',
                        CPF_Enfermeiro = '$cpf',
                        Data_Nascimento_Enfermeiro = '$dataNascimento',
                        Genero_Enfermeiro = '$genero',
                        Telefone_Enfermeiro = '$telefone',
                        Numero_Endereco_Enfermeiro = '$numeroEndereco',
                        Complemento_Endereco_Enfermeiro = '$complementoEndereco',
                        Nome_Endereco_Enfermeiro = '$nomeEndereco',
                        Logradouro_Enfermeiro = '$logradouro',
                        E_mail_Enfermeiro = '$email',
                        RG_Enfermeiro = '$rg' 
                    WHERE ID_Enfermeiro=$id";

$result = $conn->query($sql);

if ($result === TRUE) {
    ?>
    <script>
        alert('Usuário editado com sucesso!!!');
        location.href = 'enfermeiro_view.php';
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
<?php
include("../connection.php");

$id = $_POST["hidId"];
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
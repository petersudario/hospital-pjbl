<?php
include("../connection.php");


$id = $_GET["hidId"];
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

$sql = "UPDATE paciente SET 
                        Nome_Paciente = '$nome',
                        Condicao_Paciente = '$condicao',
                        CPF_Paciente = '$cpf',
                        Data_Nascimento_Paciente = '$dataNascimento',
                        Genero_Paciente = '$genero',
                        Telefone_Emergencia_Paciente = '$telefone',
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
        alert('Usuário cadastrado com sucesso!!!');
        location.href = <?= header("Location: paciente_view.php") ?>;
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
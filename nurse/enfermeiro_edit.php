<?php
include("../connection.php");

$sql = "SELECT * FROM Enfermeiro";

$result = $conn->query($sql);

$id = $_GET["ID_Enfermeiro"];
$sql = "SELECT * FROM Enfermeiro WHERE ID_Enfermeiro = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
}
?>

<div class="flex justify-center">
    <div class="max-w-md">
        <div class="bg-white shadow-md rounded p-4 mb-4">
            id:
            <?php echo $id; ?><br>
            Nome:
            <?php echo $row['Nome_Enfermeiro']; ?><br>
            CIP:
            <?php echo $row['CIP']; ?><br>
            CPF:
            <?php echo $row['CPF_Enfermeiro']; ?><br>
            Data de nascimento:
            <?php echo $row['Data_Nascimento_Enfermeiro']; ?><br>
            Gênero:
            <?php echo $row['Genero_Enfermeiro']; ?><br>
            Telefone:
            <?php echo $row['Telefone_Enfermeiro']; ?><br>
            E-mail:
            <?php echo $row['E_mail_Enfermeiro']; ?><br>
            RG:
            <?php echo $row['RG_Enfermeiro']; ?><br>
            Endereço:
            <?php echo $row['Logradouro_Enfermeiro'] . " " . $row['Nome_Endereco_Enfermeiro'] . " " . $row['Numero_Endereco_Enfermeiro'] . " " . $row['Complemento_Endereco_Enfermeiro']; ?>
        </div>
    </div>
</div>

<div class="flex justify-center">
    <div>
        <h1 class="text-2xl font-bold mb-4">Editar Enfermeiro(a)</h1>
    </div>
</div>
<div class="grid justify-center">

    <form name="form1" id="form1" method="GET" class="max-w-md mx-auto">
        <input type="text" hidden name="hidId" id="hidId" value="<?php echo $row['ID_Enfermeiro'] ?>"
            class="w-full px-4 py-2 border rounded">

        <div class="mb-4">
            <label for="txtNome" class="block mb-2">Nome:</label>
            <input type="text" name="txtNome" id="txtNome" value="<?php echo $row['Nome_Enfermeiro'] ?>"
                class="w-full px-4 py-2 border rounded">
        </div>
        <div class="mb-4">
            <label for="txtCip" class="block mb-2">CRM:</label>
            <input type="text" name="txtCip" id="txtCip" value="<?php echo $row['CIP'] ?>"
                class="w-full px-4 py-2 border rounded">
        </div>
        <input type="hidden" name="hidId" value="<?php echo $id ?>">
        <div class="mb-4">
            <label for="txtCpf" class="block mb-2">CPF:</label>
            <input type="text" name="txtCpf" id="txtCpf" value="<?php echo $row['CPF_Enfermeiro'] ?>"
                class="w-full px-4 py-2 border rounded">
        </div>
        <div class="mb-4">
            <label for="dtNascimento" class="block mb-2">Data de Nascimento:</label>
            <input type="date" name="dtNascimento" id="dtNascimento"
                value="<?php echo $row['Data_Nascimento_Enfermeiro'] ?>" class="w-full px-4 py-2 border rounded">
        </div>
        <div class="mb-4">
            <label for="txtGenero" class="block mb-2">Gênero:</label>
            <input type="text" name="txtGenero" id="txtGenero" value="<?php echo $row['Genero_Enfermeiro'] ?>"
                class="w-full px-4 py-2 border rounded">
        </div>
        <div class="mb-4">
            <label for="telTelefone" class="block mb-2">Telefone:</label>
            <input type="tel" name="telTelefone" id="telTelefone" value="<?php echo $row['Telefone_Enfermeiro'] ?>"
                class="w-full px-4 py-2 border rounded">
        </div>
        <div class="mb-4">
            <label for="email" class="block mb-2">E-mail:</label>
            <input type="text" name="email" id="email" value="<?php echo $row['E_mail_Enfermeiro'] ?>"
                class="w-full px-4 py-2 border rounded">
        </div>
        <div class="mb-4">
            <label for="txtRg" class="block mb-2">RG:</label>
            <input type="text" name="txtRg" id="txtRg" value="<?php echo $row['RG_Enfermeiro'] ?>"
                class="w-full px-4 py-2 border rounded">
        </div>
        <div class="mb-4">
            <label for="txtLogradouro" class="block mb-2">Logradouro:</label>
            <input type="text" name="txtLogradouro" id="txtLogradouro"
                value="<?php echo $row['Logradouro_Enfermeiro'] ?>" class="w-full px-4 py-2 border rounded">
        </div>
        <div class="mb-4">
            <label for="txtNomeEndereco" class="block mb-2">Nome Endereço:</label>
            <input type="text" name="txtNomeEndereco" id="txtNomeEndereco"
                value="<?php echo $row['Nome_Endereco_Enfermeiro'] ?>" class="w-full px-4 py-2 border rounded">
        </div>
        <div class="mb-4">
            <label for="txtNumeroEndereco" class="block mb-2">Número Endereço:</label>
            <input type="text" name="txtNumeroEndereco" id="txtNumeroEndereco"
                value="<?php echo $row['Numero_Endereco_Enfermeiro'] ?>" class="w-full px-4 py-2 border rounded">
        </div>
        <div class="mb-4">
            <label for="txtComplementoEndereco" class="block mb-2">Complemento Endereço:</label>
            <input type="text" name="txtComplementoEndereco" id="txtComplementoEndereco"
                value="<?php echo $row['Complemento_Endereco_Enfermeiro'] ?>" class="w-full px-4 py-2 border rounded">
        </div>
    </form>
    <input onclick="submit()" type="button" value="Enviar" class="px-4 py-2 bg-blue-500 text-white rounded">

</div>

<script>
    function submit() {
        location.href = "./enfermeiro_edit_php.php?hidId=" + document.getElementById("hidId").value + "&txtNome=" + document.getElementById("txtNome").value + "&txtCip=" + document.getElementById("txtCip").value + "&txtCpf=" + document.getElementById("txtCpf").value + "&dtNascimento=" + document.getElementById("dtNascimento").value + "&txtGenero=" + document.getElementById("txtGenero").value + "&telTelefone=" + document.getElementById("telTelefone").value + "&email=" + document.getElementById("email").value + "&txtRg=" + document.getElementById("txtRg").value + "&txtLogradouro=" + document.getElementById("txtLogradouro").value + "&txtNomeEndereco=" + document.getElementById("txtNomeEndereco").value + "&txtNumeroEndereco=" + document.getElementById("txtNumeroEndereco").value + "&txtComplementoEndereco=" + document.getElementById("txtComplementoEndereco").value;
    }
</script>
<?php
include("../components/footer.php");
?>
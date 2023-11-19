<?php
include("../connection.php");

$id = $_GET["ID_Paciente"];
$sql = "SELECT * FROM Paciente WHERE ID_Paciente = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
}

?>


<div class="flex justify-center">
    <div>
        <h1 class="text-2xl font-bold mb-4">Editar Paciente</h1>
    </div>
</div>

<div class="flex justify-center">
    <div class="max-w-md">
        <div class="bg-white shadow-md rounded p-4 mb-4">
            id: <?php echo $id ?><br>
            Nome: <?php echo $row['Nome_Paciente'] ?><br>
            Condicao: <?php echo $row['Condicao_Paciente'] ?><br>
            CPF: <?php echo $row['CPF_Paciente'] ?><br>
            Data de nascimento: <?php echo $row['Data_Nascimento_Paciente'] ?><br>
            Gênero: <?php echo $row['Genero_Paciente'] ?><br>
            Telefone: <?php echo $row['Telefone_Emergencia_Paciente'] ?><br>
            E-mail: <?php echo $row['E_mail_Paciente'] ?><br>
            RG: <?php echo $row['RG_Paciente'] ?><br>
            Endereço: <?php echo $row['Logradouro_Paciente'] . " " . $row['Nome_Endereco_Paciente'] . " " . $row['Numero_Endereco_Paciente'] . " " . $row['Complemento_Endereco_Paciente'] ?>
        </div>
    </div>
</div>

<div class="grid justify-center">
    <form name="form1" id="form1" method="GET" class="max-w-md mx-auto">
            <input type="text" hidden name="hidId" id="hidId" value="<?php echo $row['ID_Paciente'] ?>" class="w-full px-4 py-2 border rounded">

        <div class="mb-4">
            <label for="txtNome" class="block mb-2">Nome:</label>
            <input type="text" name="txtNome" id="txtNome" value="<?php echo $row['Nome_Paciente'] ?>" class="w-full px-4 py-2 border rounded">
        </div>
        <div class="mb-4">
            <label for="txtCondicao" class="block mb-2">Condicao:</label>
            <input type="text" name="txtCondicao" id="txtCondicao" value="<?php echo $row['Condicao_Paciente'] ?>"
                class="w-full px-4 py-2 border rounded">
        </div>
        <input type="hidden" name="hidId" value="<?php echo $id ?>">
        <div class="mb-4">
            <label for="txtCpf" class="block mb-2">CPF:</label>
            <input type="text" name="txtCpf" id="txtCpf" value="<?php echo $row['CPF_Paciente'] ?>" class="w-full px-4 py-2 border rounded">
        </div>
        <div class="mb-4">
            <label for="dtNascimento" class="block mb-2">Data de Nascimento:</label>
            <input type="date" name="dtNascimento" id="dtNascimento" value="<?php echo $row['Data_Nascimento_Paciente'] ?>"
                class="w-full px-4 py-2 border rounded">
        </div>
        <div class="mb-4">
            <label for="txtGenero" class="block mb-2">Gênero:</label>
            <input type="text" name="txtGenero" id="txtGenero" value="<?php echo $row['Genero_Paciente'] ?>" class="w-full px-4 py-2 border rounded">
        </div>
        <div class="mb-4">
            <label for="telTelefone" class="block mb-2">Telefone de Emergência</label>
            <input type="tel" name="telTelefone" id="telTelefone" value="<?php echo $row['Telefone_Emergencia_Paciente'] ?>"
                class="w-full px-4 py-2 border rounded">
        </div>
        <div class="mb-4">
            <label for="email" class="block mb-2">E-mail:</label>
            <input type="text" name="email" id="email" value="<?php echo $row['E_mail_Paciente'] ?>" class="w-full px-4 py-2 border rounded">
        </div>
        <div class="mb-4">
            <label for="txtRg" class="block mb-2">RG:</label>
            <input type="text" name="txtRg" id="txtRg" value="<?php echo $row['RG_Paciente'] ?>" class="w-full px-4 py-2 border rounded">
        </div>
        <div class="mb-4">
            <label for="txtLogradouro" class="block mb-2">Logradouro:</label>
            <input type="text" name="txtLogradouro" id="txtLogradouro" value="<?php echo $row['Logradouro_Paciente'] ?>"
                class="w-full px-4 py-2 border rounded">
        </div>
        <div class="mb-4">
            <label for="txtNomeEndereco" class="block mb-2">Nome Endereço:</label>
            <input type="text" name="txtNomeEndereco" id="txtNomeEndereco" value="<?php echo $row['Nome_Endereco_Paciente'] ?>"
                class="w-full px-4 py-2 border rounded">
        </div>
        <div class="mb-4">
            <label for="txtNumeroEndereco" class="block mb-2">Número Endereço:</label>
            <input type="text" name="txtNumeroEndereco" id="txtNumeroEndereco" value="<?php echo $row['Numero_Endereco_Paciente'] ?>"
                class="w-full px-4 py-2 border rounded">
        </div>
        <div class="mb-4">
            <label for="txtComplementoEndereco" class="block mb-2">Complemento Endereço:</label>
            <input type="text" name="txtComplementoEndereco" id="txtComplementoEndereco" value="<?php echo $row['Complemento_Endereco_Paciente'] ?>"
                class="w-full px-4 py-2 border rounded">
        </div>
    </form>
    <input type="button" onclick="submit()" value="Enviar" class="w-full px-4 py-2 bg-green-500 text-white rounded-md">

    <script>
        function submit() {
            location.href = "./paciente_edit_php.php?hidId=" + document.getElementById("hidId").value + "&txtNome=" + document.getElementById("txtNome").value + "&txtCondicao=" + document.getElementById("txtCondicao").value + "&txtCpf=" + document.getElementById("txtCpf").value + "&dtNascimento=" + document.getElementById("dtNascimento").value + "&txtGenero=" + document.getElementById("txtGenero").value + "&telTelefone=" + document.getElementById("telTelefone").value + "&email=" + document.getElementById("email").value + "&txtRg=" + document.getElementById("txtRg").value + "&txtLogradouro=" + document.getElementById("txtLogradouro").value + "&txtNomeEndereco=" + document.getElementById("txtNomeEndereco").value + "&txtNumeroEndereco=" + document.getElementById("txtNumeroEndereco").value + "&txtComplementoEndereco=" + document.getElementById("txtComplementoEndereco").value;
        }
    </script>
</div>

<?php
include("../components/footer.php");
?>